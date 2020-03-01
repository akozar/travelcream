document.addEventListener("DOMContentLoaded", function () {
    function TravelModel() {
        // TODO Change to some datasource
        var self = this;

        self.getTemplateDomId = function (name) {
            return 'template' + name;
        };

        self.travelDataArr = travelDataGenerated.getMockData();

        self.getItems = function (type, sortOptName) {
            let travelData = ko.utils.arrayFirst(self.travels(), function(travelItem) {
                return travelItem.name() == type;
            })

            return travelData.items().filter(function (el) {
                return (el.sortName === sortOptName) ? true : false;
            })[0].data;
        };

        self.updateSortOption = function (type, sortOptName) {
            var travel = ko.utils.arrayFirst(self.travels(), function(travelItem) {
                return travelItem.name() == type();
            });

            typeof travel !== 'undefined' &&travel.sortActive(sortOptName);
            // self.travelDataArr = [];
            // self.travels.removeAll();

        };

        console.log(self.travelDataArr);

        self.travels = ko.observableArray(convertToObservable(self.travelDataArr));
    }

    window.travelModel = new TravelModel();
    ko.applyBindings(travelModel);

});

var travelDataGenerated = new MockDataGenerator();

function convertToObservable(list)
{
    var newList = [];
    jQuery.each(list, function (i, obj) {
        var newObj = {};
        Object.keys(obj).forEach(function (key) {
            newObj[key] = ko.observable(obj[key]);
        });
        newList.push(newObj);
    });
    return newList;
}

function MockDataGenerator () {
    this.placeIMGTypes = ['animals', 'architecture', 'sepia', 'people', 'tech', 'grayscale', 'nature'];
    this.travelTypeData   = [
        {
            name : 'Flights',
            sort_options : ['Non stop', 'Best Price', 'Airline', 'Schedule'],
            sort_active : 'Non stop',
            items_count : 5,
            href : '#flights'
        },
        {
            name : 'Hotels',
            sort_options : ['Best price', 'Distance'],
            sort_active : 'Best price',
            items_count : 6,
            href : '#hotels'
        },
        {
            name : 'Attractions',
            sort_options : ['All', 'Shoppings', 'Shows', 'Parks', 'Circuits', 'Museums', 'Monuments'],
            sort_active : 'All',
            items_count : 6,
            href : '#attractions'
        },
        {
            name : 'Trips',
            sort_options : ['Best trips', 'Popularity'],
            sort_active : 'Best trips',
            items_count : 3,
            href : '#trips'
        }
    ];
    this.mockDataExisted = undefined;

    this.getRandArrEl = function (items) {
        return items[Math.floor(Math.random() * items.length)];
    }

    this.getPlaceIMGUri = function (width, height) {
        return 'https://placeimg.com/' + width + '/' + height + '/' + this.getRandArrEl(this.placeIMGTypes);
    }

    this.genRandomItemData = function (travelType, idx) {
        switch (travelType) {
            case 'Flights' :
                return {
                    airlineIcon: this.getPlaceIMGUri(48,48),
                    airlineName: this.getRandArrEl(['Delta', 'Vueling', 'American', 'Transavia']),
                    airlineFlightNum: 'DL' + Math.ceil(Math.random() * 10000),
                    departureDate: '03/11/2019',
                    departureDateDays: 'In 3 days',
                    departureAirport: 'Paris (CDG)',
                    departureTime: '07:15',
                    arrivalCity: 'Miami',
                    arrivalTime: '10:15',
                    flightTime: '5:00',
                    flightChain: 'CDG - MIA',
                    flightPrice: Math.ceil(Math.random() * 800) + ' $'
                };
            case 'Hotels' : return {
                    name: this.getRandArrEl(['Hilton', 'Lorem', 'Ipsum', 'Dolor']),
                    thumb: this.getPlaceIMGUri(350,200),
                    distance: (Math.random() * 40).toFixed(1) + ' km',
                    benefit: 'Free Wi-Fi',
                    price:   10 + Math.ceil(Math.random() * 100) + ' $'
                };
            case 'Attractions' :
                let mockDataObj = {};
                mockDataObj.name = this.getRandArrEl(['Eiffel Tower', 'Louvres', 'Notre Dame de Paris', 'Forum des Halles']);

                switch (idx) {
                    case 0:
                        mockDataObj.thumb = this.getPlaceIMGUri(350,525);
                        break;
                    case 2:
                    case 3:
                        mockDataObj.thumb = this.getPlaceIMGUri(730,247);
                        break;
                    case 1:
                    case 4:
                    case 5:
                        mockDataObj.thumb = this.getPlaceIMGUri(350,260);
                        break;
                }

                return mockDataObj;
                break;
            case 'Trips' : return {
                    name: this.getRandArrEl(['Hilton', 'Lorem', 'Ipsum', 'Dolor']),
                    thumb: this.getPlaceIMGUri(350,230),
                    desc: 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ' +
                        'laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ' +
                        'architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas ' +
                        'sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione ' +
                        'voluptatem sequi nesciunt.'
                };
        };
    };

    this.genMockDataItems = function (travelType, count) {
        let mockDataObj = undefined, res = [];

        for (let j=0; j<count; j++)
            res.push(this.genRandomItemData(travelType, j));

        return res;
    };

    this.getMockData = function (count) {
        if (typeof this.mockDataExisted !== 'undefined') return this.mockDataExisted;

        let res = [];
        for (let i=0; i<this.travelTypeData.length; i++) {
            let travelTypeObj   = {
                name    : this.travelTypeData[i].name,
                items   : [],
                itemsCount  : this.travelTypeData[i].items_count,
                sortOptions : this.travelTypeData[i].sort_options,
                sortActive  : this.travelTypeData[i].sort_active,
            };

            for (let j=0; j<travelTypeObj.sortOptions.length; j++) {
                let sortOptName = travelTypeObj.sortOptions[j];
                travelTypeObj.items.push ( {
                    sortName : sortOptName,
                    data : this.genMockDataItems(
                        travelTypeObj.name,
                        this.travelTypeData[i].items_count
                    ),
                });
                let x =0;
            }

            res.push(travelTypeObj);
        }

        this.mockDataExisted = res;
        return this.mockDataExisted;
    }
}
