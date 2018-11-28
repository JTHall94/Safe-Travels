<template>
    <div class="form-group">
      <label for="addcontact" class="font-weight-bold">Tag Contacts:</label>
      <select v-model="taggedDisplayText" v-on:change="tag($event)" class="form-control" id="addcontact" name="addcontact" placeholder="Tag your Contacts!">
        <option :value="undefined" disabled selected>Tag your contacts!</option>
        <option v-for="contact in contacts" :disabled="tagged.includes(contact.firstname + ' ' + contact.lastname)">{{contact.firstname}} {{contact.lastname}}</option>
      </select>
        <div class="row">
          <div class="col" v-for="tags in tagged">
            <p class="ml-1 btn btn-success" v-on:click="remove(tags)">{{tags}}</p>
          </div>
        </div>
  </div>
</template>

<script>

    export default {

      props: ['contacts'],

      data: function() {
        return {
          tagged : [],
          taggedDisplayText : undefined
        }

      },

        mounted() {

        },

        methods: {

            tag: function(contact) {

              this.tagged.push(this.taggedDisplayText);
              this.taggedDisplayText = undefined;
              /*if(this.tagged.includes(contact)) {
                  console.log('Already in there');
                  alert('This is working.');
             }
              else {
                console.log('Going to push this contact to the array!');
              } */
            },

            remove: function(tags) {

              for (var i=this.tagged.length-1; i>=0; i--) {
                if (this.tagged[i]=== tags) {
                  this.tagged.splice(i,1);
                }
              }

            }


            }




        };




</script>
