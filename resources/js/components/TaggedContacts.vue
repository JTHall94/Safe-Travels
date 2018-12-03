<template>
    <div class="form-group">
      <label for="addcontact" class="font-weight-bold">Tag Contacts:</label>
      <select v-model="taggedDisplayText" v-on:change="tag($event)" class="form-control" id="addcontact" name="addcontact" placeholder="Tag your Contacts!">
        <option :value="undefined" disabled selected>Tag your contacts!</option>
        <option v-for="contact in contacts" :disabled="tagged.includes(contact)" :value="contact">{{contact.firstname}} {{contact.lastname}}</option>
      </select>
        <div class="row">
          <div class="col taggedconcol" v-for="tag in tagged">
            <p class="btn btn-success" v-on:click="remove(tag)">{{tag.firstname}} {{tag.lastname}}</p>
            <input type="hidden" name="taggedcontacts[]" class="ml-1 btn btn-success"  :value="tag.id" readonly>
          </div>
        </div>
  </div>
</template>

<script>

    export default {

      props: ['contacts', 'tags'],

      data: function() {
        return {
          tagged : [],
          taggedDisplayText : undefined
        }

      },

        mounted() {

          if (this.tags) {
           for (let i=0; i<this.tags.length; i++) {
              for (let j=0; j<this.contacts.length; j++) {
                if (this.tags[i].id===this.contacts[j].id) {
                  this.tagged.push(this.contacts[j]);
                }
              }

            //console.log(this.tagged);
          }
        }

          //console.log(this.contacts);
          console.log(this.tags);
        },

        methods: {

            tag: function(contact) {

              console.log(contact)
              console.log(this.taggedDisplayText);


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
