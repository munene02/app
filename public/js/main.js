
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;

        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",

                showRefresh: false,
                search: false,
                showToggle: false,
                showColumns: false,
                pagination: false,
                striped: true,
                sortable: true,
                pageSize: 10,
                pageList: [10,25,50,100],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
        });

        $(function () {
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
        });


        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }

        window.operateEvents = {
            'click .like': function (e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .edit': function (e, value, row, index) {
                console.log(value, row, index);
            },
            'click .remove': function (e, value, row, index) {
                alert('You click remove icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            }
        };

    //     $.ajaxSetup({
    //      headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    // 	});

    // // jQuery.ajax({
    // //     url:'https://raw.githubusercontent.com/jokecamp/FootballData/master/openFootballData/countries.json',
    // //     type: 'GET',
    // //     success: function( data ){

    // //         console.log(data);
    // //     },
    // //     error: function (xhr, b, c) {
    // //         console.log("xhr=" + xhr + " b=" + b + " c=" + c);
    // //     }
    // // });

    //Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
  //   new Vue({

	 // 	el: '#app',
		// data(){
		// 	return {
		// 		users:[]
		// 	}
		// },
		// methods:{

		// },
		// created: function(){
		// 		this.$http.get('https://jsonplaceholder.typicode.com/users')
		// 			.then(function(response){
		// 				// this.users = response.data;
		// 				console.log(response);
		// 			});
		// } 
	 		
 	// });

//Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

// new Vue({   
//     el: '#tips',
    
//     data:{
//         newTip: { title: '', content: ''},
//         submitted: false,
//         baseUrl: '',
//         tips: []
//     },
    
//     ready: function(){
//         this.fetchTips();
//     },
    
//     methods:{
        
//         // fetchTips: function(){
//         //     this.$http.get('https://jsonplaceholder.typicode.com/users', function(tips) {
//         //         //this.$set('tips', tips);
//         //         console.log(tips)
//         //     });
//         // },
        
//         addTip: function(e){
//             e.preventDefault();
//             var tip = this.newTip;
//             tip.content = $('#tipRteInstance').html();
//             this.tips.push(tip);
//             this.newTip = { title: '', content: '' }; $('#tipRteInstance').html('');
//             //Vue.http.options.emulateJSON = true;
//             this.$http.post(this.baseUrl + '/api/tips', tip);
//             this.submitted = true;
//         }
        
//     },
//     created: function(){
//             this.$http.get('https://jsonplaceholder.typicode.com/users', function(tips) {
//                 //this.$set('tips', tips);
//                 console.log(tips)
//             });
//         }
    
// });

// new Vue({   
//  el: '#tips',
// 	ready: function() {
// 	    this.getCounties;
// 	},

// 	data: {
// 	    users: []
// 	},

// 	methods:{

// 	    getCounties: function(){

// 	        // ajax get County list
// 	        this.$http.get('https://jsonplaceholder.typicode.com/users')
// 	            .success(function(users){
// 	            	console.log(users);
// 	               this.users = users;
// 	            })
// 	            .error(function(){

// 	            }); //ajaxcall

// 	    } // displayCounty
// 	}
// })