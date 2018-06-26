	var toancuc =0;
	$(document).ready(function(){
		$("#load").click(function(){
			toancuc=toancuc + 1;
			$.get("load/"+toancuc, function(data){
				$("#ajax").append(data);
			});
		});
	});
	

jQuery(document).ready(function($) {
    var engine = new Bloodhound({
        remote: {
            url: 'search/products?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),
        name: 'products_list',
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="products-detail/' + data.id + '" class="list-group-item">' + data.name + '</a>'
      }
        }
    });
});

jQuery(document).ready(function($) {
    var engine = new Bloodhound({
        remote: {
            url: 'search/news?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search1").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),
        name: 'usersList',
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><span>Nothing found.</span></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="' + data.id + '" class="list-group-item">' + data.name + '</a>'
      }
        }
    });
});