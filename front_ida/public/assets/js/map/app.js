// TO MAKE THE MAP APPEAR YOU MUST
// ADD YOUR ACCESS TOKEN FROM
// https://account.mapbox.com
mapboxgl.accessToken = 'pk.eyJ1Ijoia2xhdXNicmljZSIsImEiOiJjazlzcmlwZjgwNHJvM2ZwOGozYmIyYjlxIn0.RwykjI3F3EKg4O4XNE_8Zg';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [21.776363875831294, 32.80295252044151],
    zoom: 1,
    minZoom: 1,

});

map.on('load', function() {
    map.loadImage(
        'https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png',



        // Add an image to use as a custom marker
        function(error, image) {
            if (error) throw error;
            map.addImage('custom_marker', image);

            map.addSource('places', {
                'type': 'geojson',
                'data': {
                    'type': 'FeatureCollection',
                    'features': [{
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Alger</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [3.076, 36.774]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Rabat</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-6.817, 33.966]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Lomé</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [1.0822, 8.9855]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Abidjan</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-6.7756, 9.6035]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': "<strong>Pritoria</strong>"
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [28.191, -25.681]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Berlin</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [13.348, 52.503]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Paris</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [2.373, 48.857]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': "<strong>Washington</strong>"
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.0306, 38.9039]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Ottawa</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-75.795, 45.452]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Bogota</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-74.0959, 4.6531]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Moscou</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [37.612, 55.743]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Londre</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-0.1167, 51.5028]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Zurich</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [8.5426, 47.3737]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Varsovie</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [21.0017, 52.2349]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Prague</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [14.4196, 50.0884]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Zagreb</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [15.9748, 45.8121]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Sofia</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [23.3205, 42.6986]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Kiev</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [23.357, 42.682]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Jérusalem</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [35.2259, 31.7798]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Ankara</strong>'

                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [32.767, 39.914]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Bakou</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [49.8285, 40.3717]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Pékin</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [116.7194, 39.9008]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Taipei</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [121.5170, 25.0470]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Riyad</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [46.7221, 24.6202]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Nouméa</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [166.4424, -22.2746]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Helsinki</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [24.9294, 60.1682]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Stockholm</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [18.0727, 59.3243]
                        }
                    }, {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Vienne</strong>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [16.3702, 48.2093]
                        }
                    }]
                }
            });
            // Add a layer showing the places.
            map.addLayer({
                'id': 'places',
                'type': 'symbol',
                'source': 'places',
                'layout': {
                    'icon-image': 'custom_marker',
                    'icon-size': 0.5,
                    // 'icon-allow-overlap': true
                },

            });
        }
    );

    // Create a popup, but don't add it to the map yet.
    var popup = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false
    });

    map.on('mouseenter', 'places', function(e) {
        // Change the cursor style as a UI indicator.
        map.getCanvas().style.cursor = 'pointer';

        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }

        // Populate the popup and set its coordinates
        // based on the feature found.
        popup.setLngLat(coordinates).setHTML(description).addTo(map);
    });

    map.on('mouseleave', 'places', function() {
        map.getCanvas().style.cursor = '';
        popup.remove();
    });

    map.on('move', function() {
        console.log(map.getCenter());
    });
});