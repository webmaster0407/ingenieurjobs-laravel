/*!========================================================================
 * Iconset: Weather Icons
 * Versions: 1.2.0, 2.0.10
 * http://erikflowers.github.io/weather-icons/
 * ======================================================================== */

;(function($){

    var data = {
        iconClass: 'wi',
        iconClassFix: 'wi-',
        icons: [],
        allVersions: [
            {
                version: '1.2.0',
                icons: [
                    '',
                    'alien',
                    'celsius',
                    'cloud',
                    'cloud-down',
                    'cloud-refresh',
                    'cloud-up',
                    'cloudy',
                    'cloudy-gusts',
                    'cloudy-windy',
                    'day-cloudy',
                    'day-cloudy-gusts',
                    'day-cloudy-windy',
                    'day-fog',
                    'day-hail',
                    'day-lightning',
                    'day-rain',
                    'day-rain-mix',
                    'day-rain-wind',
                    'day-showers',
                    'day-sleet-storm',
                    'day-snow',
                    'day-snow-thunderstorm',
                    'day-snow-wind',
                    'day-sprinkle',
                    'day-storm-showers',
                    'day-sunny',
                    'day-sunny-overcast',
                    'day-thunderstorm',
                    'degrees',
                    'down',
                    'down-left',
                    'dust',
                    'fahrenheit',
                    'fog',
                    'hail',
                    'horizon',
                    'horizon-alt',
                    'hot',
                    'hurricane',
                    'left',
                    'lightning',
                    'lunar-eclipse',
                    'meteor',
                    'moon-full',
                    'moon-new',
                    'moon-old',
                    'moon-waning-crescent',
                    'moon-waning-gibbous',
                    'moon-waning-quarter',
                    'moon-waxing-crescent',
                    'moon-waxing-gibbous',
                    'moon-waxing-quarter',
                    'moon-young',
                    'night-alt-cloudy-gusts',
                    'night-alt-cloudy-windy',
                    'night-alt-hail',
                    'night-alt-lightning',
                    'night-alt-rain',
                    'night-alt-rain-mix',
                    'night-alt-rain-wind',
                    'night-alt-showers',
                    'night-alt-sleet-storm',
                    'night-alt-snow',
                    'night-alt-snow-thunderstorm',
                    'night-alt-snow-wind',
                    'night-alt-sprinkle',
                    'night-alt-storm-showers',
                    'night-alt-thunderstorm',
                    'night-clear',
                    'night-cloudy',
                    'night-cloudy-gusts',
                    'night-cloudy-windy',
                    'night-fog',
                    'night-hail',
                    'night-lightning',
                    'night-partly-cloudy',
                    'night-rain',
                    'night-rain-mix',
                    'night-rain-wind',
                    'night-showers',
                    'night-sleet-storm',
                    'night-snow',
                    'night-snow-thunderstorm',
                    'night-snow-wind',
                    'night-sprinkle',
                    'night-storm-showers',
                    'night-thunderstorm',
                    'rain',
                    'rain-mix',
                    'rain-wind',
                    'refresh',
                    'refresh-alt',
                    'right',
                    'showers',
                    'smog',
                    'smoke',
                    'snow',
                    'snow-wind',
                    'snowflake-cold',
                    'solar-eclipse',
                    'sprinkle',
                    'sprinkles',
                    'stars',
                    'storm-showers',
                    'strong-wind',
                    'sunrise',
                    'sunset',
                    'thermometer',
                    'thermometer-exterior',
                    'thermometer-internal',
                    'thunderstorm',
                    'tornado',
                    'up',
                    'up-right',
                    'wind-east',
                    'wind-north',
                    'wind-north-east',
                    'wind-north-west',
                    'wind-south',
                    'wind-south-east',
                    'wind-south-west',
                    'wind-west',
                    'windy'
                ]
            },
            {
                version: '2.0.10',
                icons: [
                    '',
                    'alien',
                    'barometer',
                    'celsius',
                    'cloud',
                    'cloud-down',
                    'cloud-refresh',
                    'cloud-up',
                    'cloudy',
                    'cloudy-gusts',
                    'cloudy-windy',
                    'day-cloudy',
                    'day-cloudy-gusts',
                    'day-cloudy-high',
                    'day-cloudy-windy',
                    'day-fog',
                    'day-hail',
                    'day-haze',
                    'day-light-wind',
                    'day-lightning',
                    'day-rain',
                    'day-rain-mix',
                    'day-rain-wind',
                    'day-showers',
                    'day-sleet',
                    'day-sleet-storm',
                    'day-snow',
                    'day-snow-thunderstorm',
                    'day-snow-wind',
                    'day-sprinkle',
                    'day-storm-showers',
                    'day-sunny',
                    'day-sunny-overcast',
                    'day-thunderstorm',
                    'day-windy',
                    'degrees',
                    'direction-down',
                    'direction-down-left',
                    'direction-down-right',
                    'direction-left',
                    'direction-right',
                    'direction-up',
                    'direction-up-left',
                    'direction-up-right',
                    'dust',
                    'earthquake',
                    'fahrenheit',
                    'fire',
                    'flood',
                    'fog',
                    'gale-warning',
                    'hail',
                    'horizon',
                    'horizon-alt',
                    'hot',
                    'humidity',
                    'hurricane',
                    'hurricane-warning',
                    'lightning',
                    'lunar-eclipse',
                    'meteor',
                    'moon-alt-first-quarter',
                    'moon-alt-full',
                    'moon-alt-new',
                    'moon-alt-third-quarter',
                    'moon-alt-waning-crescent-1',
                    'moon-alt-waning-crescent-2',
                    'moon-alt-waning-crescent-3',
                    'moon-alt-waning-crescent-4',
                    'moon-alt-waning-crescent-5',
                    'moon-alt-waning-crescent-6',
                    'moon-alt-waning-gibbous-1',
                    'moon-alt-waning-gibbous-2',
                    'moon-alt-waning-gibbous-3',
                    'moon-alt-waning-gibbous-4',
                    'moon-alt-waning-gibbous-5',
                    'moon-alt-waning-gibbous-6',
                    'moon-alt-waxing-crescent-1',
                    'moon-alt-waxing-crescent-2',
                    'moon-alt-waxing-crescent-3',
                    'moon-alt-waxing-crescent-4',
                    'moon-alt-waxing-crescent-5',
                    'moon-alt-waxing-crescent-6',
                    'moon-alt-waxing-gibbous-1',
                    'moon-alt-waxing-gibbous-2',
                    'moon-alt-waxing-gibbous-3',
                    'moon-alt-waxing-gibbous-4',
                    'moon-alt-waxing-gibbous-5',
                    'moon-alt-waxing-gibbous-6',
                    'moon-first-quarter',
                    'moon-full',
                    'moon-new',
                    'moon-third-quarter',
                    'moon-waning-crescent-1',
                    'moon-waning-crescent-2',
                    'moon-waning-crescent-3',
                    'moon-waning-crescent-4',
                    'moon-waning-crescent-5',
                    'moon-waning-crescent-6',
                    'moon-waning-gibbous-1',
                    'moon-waning-gibbous-2',
                    'moon-waning-gibbous-3',
                    'moon-waning-gibbous-4',
                    'moon-waning-gibbous-5',
                    'moon-waning-gibbous-6',
                    'moon-waxing-crescent-1',
                    'moon-waxing-crescent-2',
                    'moon-waxing-crescent-3',
                    'moon-waxing-crescent-4',
                    'moon-waxing-crescent-5',
                    'moon-waxing-crescent-6',
                    'moon-waxing-gibbous-1',
                    'moon-waxing-gibbous-2',
                    'moon-waxing-gibbous-3',
                    'moon-waxing-gibbous-4',
                    'moon-waxing-gibbous-5',
                    'moon-waxing-gibbous-6',
                    'moonrise',
                    'moonset',
                    'na',
                    'night-alt-cloudy',
                    'night-alt-cloudy-gusts',
                    'night-alt-cloudy-high',
                    'night-alt-cloudy-windy',
                    'night-alt-hail',
                    'night-alt-lightning',
                    'night-alt-partly-cloudy',
                    'night-alt-rain',
                    'night-alt-rain-mix',
                    'night-alt-rain-wind',
                    'night-alt-showers',
                    'night-alt-sleet',
                    'night-alt-sleet-storm',
                    'night-alt-snow',
                    'night-alt-snow-thunderstorm',
                    'night-alt-snow-wind',
                    'night-alt-sprinkle',
                    'night-alt-storm-showers',
                    'night-alt-thunderstorm',
                    'night-clear',
                    'night-cloudy',
                    'night-cloudy-gusts',
                    'night-cloudy-high',
                    'night-cloudy-windy',
                    'night-fog',
                    'night-hail',
                    'night-lightning',
                    'night-partly-cloudy',
                    'night-rain',
                    'night-rain-mix',
                    'night-rain-wind',
                    'night-showers',
                    'night-sleet',
                    'night-sleet-storm',
                    'night-snow',
                    'night-snow-thunderstorm',
                    'night-snow-wind',
                    'night-sprinkle',
                    'night-storm-showers',
                    'night-thunderstorm',
                    'rain',
                    'rain-mix',
                    'rain-wind',
                    'raindrop',
                    'raindrops',
                    'refresh',
                    'refresh-alt',
                    'sandstorm',
                    'showers',
                    'sleet',
                    'small-craft-advisory',
                    'smog',
                    'smoke',
                    'snow',
                    'snow-wind',
                    'snowflake-cold',
                    'solar-eclipse',
                    'sprinkle',
                    'stars',
                    'storm-showers',
                    'storm-showers',
                    'storm-warning',
                    'strong-wind',
                    'sunrise',
                    'sunset',
                    'thermometer',
                    'thermometer-exterior',
                    'thermometer-internal',
                    'thunderstorm',
                    'thunderstorm',
                    'time-1',
                    'time-10',
                    'time-11',
                    'time-12',
                    'time-2',
                    'time-3',
                    'time-4',
                    'time-5',
                    'time-6',
                    'time-7',
                    'time-8',
                    'time-9',
                    'tornado',
                    'train',
                    'tsunami',
                    'umbrella',
                    'volcano',
                    'wind-beaufort-0',
                    'wind-beaufort-1',
                    'wind-beaufort-10',
                    'wind-beaufort-11',
                    'wind-beaufort-12',
                    'wind-beaufort-2',
                    'wind-beaufort-3',
                    'wind-beaufort-4',
                    'wind-beaufort-5',
                    'wind-beaufort-6',
                    'wind-beaufort-7',
                    'wind-beaufort-8',
                    'wind-beaufort-9',
                    'wind-direction',
                    'windy'
                ]
            }
        ]
    };

    var l = data.allVersions.length;
    data.icons = data.allVersions[l-1].icons;

    $.iconset_weathericons = data;

})(jQuery);
