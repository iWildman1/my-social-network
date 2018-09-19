function initServices() {
    const serviceList = $('.edgeless-grid .item');
    let itemActive = false;

    serviceList.each(function(index) {

        let item = $(this);
        let leftToggle = $(item).find('.control-left');
        let rightToggle = $(item).find('.control-right');

        $(this).click(function() {
            if (!itemActive) {
                $(this).removeClass('item-closed');
                $(this).addClass('item-open');
                itemActive = true;
            }
        })

        let closeBtn = $(this).find('.close-btn');

        $(closeBtn).click(function(e) {
            e.stopPropagation();
            $(item).removeClass('item-open');
            $(item).addClass('item-closed');
            itemActive = false;
        })

        if (index == 0) {
            $(leftToggle).addClass('inactive');
            $(rightToggle).removeClass('inactive');
        } else if (index == 5) {
            $(rightToggle).addClass('inactive');
            $(leftToggle).removeClass('inactive');
        } else {
            $(leftToggle).removeClass('inactive');
            $(rightToggle).removeClass('inactive');
        }

        $(leftToggle).click(function() {
            if (!$(this).hasClass('inactive')) {
                $(closeBtn).click();
                $(serviceList[index - 1]).click();
            }
        });

        $(rightToggle).click(function() {
            if (!$(this).hasClass('inactive')) {
                $(closeBtn).click();
                $(serviceList[index + 1].click());
            }
        })
    })
}

module.exports = {
    initServices: initServices
}