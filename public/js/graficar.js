var data = {
    series: [
        [
            { meta: 'Universidad 1', value: 111 },
            { meta: 'Universidad 2', value: 213 },
            { meta: 'Universidad 3', value: 332 },
            { meta: 'Universidad 4', value: 122 },
            { meta: 'Universidad 5', value: 543 },
            { meta: 'Universidad 6', value: 346 },
            { meta: 'Universidad 7', value: 178 },
            { meta: 'Universidad 8', value: 512 },
            { meta: 'Universidad 9', value: 380 },
            { meta: 'Universidad 10', value: 156 },
            { meta: 'Universidad 11', value: 522 },
            { meta: 'Universidad 12', value: 345 },
            { meta: 'Universidad 13', value: 121 },
            { meta: 'Universidad 14', value: 523 },
            { meta: 'Universidad 15', value: 356 },
            { meta: 'Universidad 16', value: 191 },
            { meta: 'Universidad 17', value: 590 },
            { meta: 'Universidad 18', value: 324 }
        ]
    ]
};

$(document).ready(function() {
    console.log("ready!");
    initChartist(data);
});

function initChartist(data) {


    var options = {
        seriesBarDistance: 5,
        axisX: {
            showGrid: false
        },
        height: "245px",
        plugins: [
            Chartist.plugins.tooltip()
        ]
    };

    var responsiveOptions = [
        ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function(value) {
                    return value[0];
                }
            }
        }]
    ];

    Chartist.Bar('#PosicionUniversidades', data, options, responsiveOptions);
}
