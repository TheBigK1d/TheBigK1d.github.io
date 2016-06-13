/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */


  particlesJS("particles-js",

      {
        "particles": {
          "number": {
            "value": 300,
            "density": {
              "enable": true,
              "value_area": 1200
            }
          },
          "color": {
            "value": "#00bc8c"
          },
          "shape": {
            "type": "circle" ,
            "stroke": {
              "width": 0,
              "color": "#00bc8c"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": null,
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 1,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 3,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 80,
            "color": "#00bc8c",
            "opacity": 1,
            "width": 5
          },
          "move": {
            "enable": true,
            "speed":5,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "bounce",
            "attract": {
              "enable": true,
              "rotateX": -20,
              "rotateY": -20
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": false,
              "mode": "grab"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 100
            },
            "push": {
              "particles_nb": 1
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }

  );





