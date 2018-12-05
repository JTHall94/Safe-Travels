<template>
  <div>
    <div class="row">
      <div class="col">
        <label>
          <GmapAutocomplete @place_changed="setPlace" id="alertdisplaylocation" name="alertdisplaylocation" :value="alert.location ? alert.location : '' " readonly class="form-control">
          </GmapAutocomplete>
        </label>
        <br/>
    </div>
  </div>

    <GmapMap style="width: 600px; height: 300px;" :zoom="10" :center="{lat: parseFloat(alert.alertlat), lng: parseFloat(alert.alertlng)}">
      <GmapMarker v-for="(marker, index) in markers"
        :key="index"
        :position="marker.position"
        />
      <GmapMarker
        v-if="this.place"
        label="★"
        :position="{
          lat: parseFloat(this.alert.alertlat),
          lng: parseFloat(this.alert.alertlng),
        }"
        />
    </GmapMap>
  </div>
</template>



<script>

import * as VueGoogleMaps from 'vue2-google-maps'

import AutoComplete from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyChEtjZl8cEGdECNhMPPA31y41ciVPhQss',
    libraries: 'places',

  },
})

    export default {

      props: ['alert'],

      data: function() {
        return {
          components: {
            VueGoogleMaps,
            AutoComplete
          },

          markers: [],
          place: null,
        }
      },

      mounted: function () {

          this.markers.push({
            position: {
              lat: parseFloat(this.alert.alertlat),
              lng: parseFloat(this.alert.alertlng),
            }
          })
      },

      methods: {

        setDescription(description) {
        this.description = description;
        },
        setPlace(place) {
          this.place = place;

        },
        usePlace(place) {
          if (this.place) {
            this.markers.push({
              position: {
                lat: this.place.geometry.location.lat(),
                lng: this.place.geometry.location.lng(),
              }

            })
            this.place = null;
          }
        }


      }

    }


  </script>
