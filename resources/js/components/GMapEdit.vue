<template>
  <div>
    <label>
      AutoComplete
      <GmapAutocomplete @place_changed="setPlace" id="new_alert_location" name="new_alert_location" :value="alert.location ? alert.location : '' ">
      </GmapAutocomplete>
      <!--button @click="usePlace">Add</button-->
    </label>
    <br/>

    <GmapMap style="width: 600px; height: 300px;" :zoom="1" :center="{lat: 0, lng: 0}">
      <GmapMarker v-for="(marker, index) in markers"
        :key="index"
        :position="marker.position"
        />
      <GmapMarker
        v-if="this.place"
        label="★"
        :position="{
          lat: this.place.geometry.location.lat(),
          lng: this.place.geometry.location.lng(),
        }"
        />
    </GmapMap>
  </div>
</template>





<!--template>
  <GmapMap
      :center="{lat:10, lng:10}"
      :zoom="7"
      map-type-id="terrain"
      style="width: 500px; height: 300px"
    >
      <GmapMarker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        :clickable="true"
        :draggable="true"
        @click="center=m.position"
      />
    </GmapMap>
</template-->


<script>

import * as VueGoogleMaps from 'vue2-google-maps'

import AutoComplete from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyChEtjZl8cEGdECNhMPPA31y41ciVPhQss',
    libraries: 'places',
    //process.env.MIX_GOOGLE_API_KEY,
    //libraries: 'places', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)

    //// If you want to set the version, you can do so:
    // v: '3.26',
  },

  //// If you intend to programmatically custom event listener code
  //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
  //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
  //// you might need to turn this on.
  // autobindAllEvents: false,

  //// If you want to manually install components, e.g.
  //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  // installComponents: true,
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

      methods: {

        setDescription(description) {
        this.description = description;
      },
      setPlace(place) {
        this.place = place
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
