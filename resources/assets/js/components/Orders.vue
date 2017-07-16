<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <div class="table-responsive">
                <div class="form-group has-feedback">
                  <input type="text" placeholder="Search By Name..." class="form-control" v-model="search" />
                  <i class="fa fa-search form-control-feedback"></i>
                </div>
                <table class="table table-condensed table-striped">
                  <thead>
                    <tr class="info">
                      <th>Name</th>
                      <th>Email</th>
                      <th>Dwelling Type</th>
                      <th>Destination Location</th>
                      <th>Orginal Location</th>
                      <th>Moving Date</th>
                      <th>Flexibility</th>
                      <th colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in filteredSearch">
                      <td>{{ item.name }}</td>
                      <td>{{ item.email }}
                      <td>{{ item.type }}</td>
                      <td>{{ item.destination }}</td>
                      <td>{{ item.orginal }}</td>
                      <td>{{ item.moving_date }}</td>
                      <td>
                        <span v-if="item.flexibility == '1'">
                          Yes
                        </span>
                        <span v-else>
                          No
                        </span>
                      </td>
                      <td>
                        <button class="btn btn-app btn-xs fa-lg">
                          <span class="fa fa-trash-o"></span>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-4 bg-gray">
              <form>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control input-sm" id="" placeholder="Orginal Zipcode" v-model="startingZip" />
                  <small v-show="startingCity"> {{ startingCity }}</small>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control input-sm" id="" placeholder="Destination Zipcode" v-model="endingZip" />
                  <small v-show="endingCity"> {{ endingCity }}</small>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group controls">
                  <input placeholder="Moving Date" class="form-control input-sm" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" v-model="movingDate">

                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-sm" id="" placeholder="Fullname" v-model="fullName" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-sm" id="" placeholder="Email Address" v-model="email" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-sm" id="" placeholder="Dwelling Type" v-model="dwellingType" />
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" v-model="flex" /> My Date is flexible
                  </label>
                </div>
                <button class="btn btn-app btn-block">Mint My Move</button>
              </div>
            </form>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['list'],
        data: function() {
          return {
            items: [],
            search: '',
        		movingDate: null,
        		fullName: '',
        		email: '',
        		flex: false,
        		dwellingType: '',
        		startingZip: '',
            startingCity: '',
            endingZip: '',
            endingCity: ''
          }
        },

        mounted: function() {
          this.fetch();
          console.log('componented mounted');
        },

        computed: {
          filteredSearch: function() {
            return this.items.filter((item) => {
              return item.name.match(this.search)
            })
          }
        },

        watch: {
          startingZip: function() {
            this.startingCity = '';
            if (this.startingZip.length == 5) {
      				this.lookupStartingZip();
      			}
          },

          endingZip: function() {
            this.endingCity = '';
            if (this.endingZip.length == 5) {
              this.lookupEndingZip();
            }
          }
        },

        methods: {
          fetch: function() {
            //console.log(this.list);
            //console.log(JSON.parse(this.list));
            this.items = JSON.parse(this.list);
          },

          lookupStartingZip: _.debounce(function () {
      			var app = this;
      			app.startingCity = "Searching...";

            $.get('http://ZiptasticAPI.com/' + app.startingZip, function(response) {
              console.log(JSON.parse(response));
              var data = JSON.parse(response);
              if (!data.error) {
                app.startingCity = data.city + ', ' + data.state;
              } else {
                app.startingCity = "Invalid zipcode";
              }
            })
      		}, 500),

          lookupEndingZip: _.debounce(function() {
            var app = this;
      			app.endingCity = "Searching...";

            $.get('http://ZiptasticAPI.com/' + app.endingZip, function(response) {
              console.log(response);
              console.log(JSON.parse(response));
              var data = JSON.parse(response);
              if (!data.error) {
                app.endingCity = data.city + ', ' + data.state;
              } else {
                app.endingCity = "Invalid zipcode";
              }
            })
          }, 500)
        }
    }
</script>
