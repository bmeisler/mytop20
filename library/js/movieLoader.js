
      var $j = jQuery;
      function getData(url){
        $j.getJSON(url +"?api_key=9e1b08f9af16f8d7c20c0dd0aeb4749a",
              function(data) {

                  var items = [];
                  var summary;

                  $j.each(data.results, function(index, currentMovie){
                    console.log(currentMovie.title);

                    // image = "http://image.tmdb.org/t/p/w600" + currentMovie.backdrop_path;
                    // if(image !==null){
                    //   console.log("image: " + image);
                    // }
                    //TO DO: handle 400 error for missing images - some sort of try/catch
                    if (currentMovie.overview !==null){
                      summary = currentMovie.overview;
                    }else{
                      summary = "No summary at this time."
                    }

                    items.push("<div class='movie-box'><h3 class='movie-title'>" + currentMovie.title + "</h3>" + summary
                       + "<br/><em>release date: </em>" + currentMovie.release_date + "<br/><a class='btn btn-ticket btn-primary btn-small' href='http://www.fandango.com/search/?q=" + currentMovie.title + "' target='_blank'>" + "Buy tickets" + "</a>" + "<figure class='figure-medium-left'><img src ='http://image.tmdb.org/t/p/w600" + currentMovie.backdrop_path +"'/>" +
                      "</figure></div>" + "<hr/>");
                  })

                  $j('.movie-list').remove();

                  $j("<ul/>", {
                      "class": "movie-list",
                      html: items.join("")
                  }).appendTo(".span8");
              });
      }
      jQuery(document).ready(function() {
          console.log("ready");
          
          $j('#popular').click( function() {
              getData("https://api.themoviedb.org/3/movie/popular");
          });
          $j('#rated').click( function() {
              getData("https://api.themoviedb.org/3/movie/top_rated");
          });
          $j('#upcoming').click( function() {
              getData("https://api.themoviedb.org/3/movie/upcoming");
          });
      });
