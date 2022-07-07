<div class="panel-cars">
    <h1>Информация об автомобилях</h1>
    <button class="btn btn-add" data-action="add-car">Добавить</button>

    <div class="content-cars">
        <div class="list-cars">
            <?php foreach ($cars as $car) :?>
                <a href="#!" class="list-cars__item" data-id="<?= $car['_id']['$oid'] ?>">                    
                    <?= $car['title'] ?>
                    <span>
                        <?php if (isset($car['number'])) { echo $car['number']; }?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>    
        <div class="info-cars" data-id=''>
            
        </div>
    </div>
</div>

<div class="__carInfoTemplate" style="display: none">
            <div class="info-cars__left">
                <div class="car-photo">
                    <img src="/public/img/pickup.jpg">
                </div>
                <div class="info-car__statistic" style="display: none">
                    <div class="info-car__statictic-title">Доход</div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Аренда </div>
                        <div class="statistic-item__value">134 765 ₽</div>
                    </div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Услуги </div>
                        <div class="statistic-item__value">405 653 ₽</div>
                    </div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Прочее</div>
                        <div class="statistic-item__value">43 432₽</div>
                    </div>
                    <div class="statistic-item statistic-item__result">
                        <div class="statistic-item__title">ИТОГО</div>
                        <div class="statistic-item__value">43 432₽</div>
                    </div>
                </div>
                <div class="info-car__statistic"  style="display: none">
                    <div class="info-car__statictic-title">Затраты</div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Топливо </div>
                        <div class="statistic-item__value">34 765 ₽</div>
                    </div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Ремонт </div>
                        <div class="statistic-item__value">45 653 ₽</div>
                    </div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Прочее</div>
                        <div class="statistic-item__value">12 432₽</div>
                    </div>
                    <div class="statistic-item statistic-item__result">
                        <div class="statistic-item__title">ИТОГО</div>
                        <div class="statistic-item__value">43 432₽</div>
                    </div>
                </div>
                <div class="info-car__statistic buyInfo"  style="display: none">
                    <div class="info-car__statictic-title">Приобретение</div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Цена </div>
                        <div class="statistic-item__value buyCost">90000 ₽</div>
                    </div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Дата </div>
                        <div class="statistic-item__value buyDate">19.05.2022</div>
                    </div>
                    <div class="statistic-item">
                        <div class="statistic-item__title">Пробег</div>
                        <div class="statistic-item__value">145 000 км</div>
                    </div>
                </div>

            </div>
            <div class="info-cars__right">
                <div class="car-about">
                    <div class="car-title">Таврия</div>
                    <div class="car-actions">
                        <button class="btn addDebet" data-action="add-repair">+ Ремонт</button>
                        <button class="btn addDebet" data-action="add-fuel">+ 
                            <figure>
                                <svg data-name="Layer 1" viewBox="32 32 512 512" xmlns="http://www.w3.org/2000/svg"><title/><path d="M274.87,98.67H146.71a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H274.87a8,8,0,0,0,8-8V106.67A8,8,0,0,0,274.87,98.67Zm-8,85.32H154.71V114.67H266.87Zm-56.08,56.64a8,8,0,0,0-5.66,2.35c-3.69,3.7-36,36.9-36,63,0,27.95,18.71,50.68,41.71,50.68S252.51,334,252.51,306c0-26.12-32.36-59.32-36-63A8,8,0,0,0,210.79,240.63Zm0,100.05c-14.17,0-25.71-15.56-25.71-34.68,0-13.67,15.41-34,25.7-45.63,10.12,11.48,25.73,32.07,25.73,45.63C236.51,325.12,225,340.68,210.79,340.68ZM436.05,225.13l-47.72-79.9a8,8,0,0,0-13.74,8.2l29.53,49.45a36,36,0,0,0,17,67.79h.13V325.4a29.28,29.28,0,0,1-58.55,0V229.27a45.42,45.42,0,0,0-37.28-44.56V84a28,28,0,0,0-28-28H124.22a28,28,0,0,0-28,28v313.3H92.79a18,18,0,0,0-18,18V438a18,18,0,0,0,18,18h236a18,18,0,0,0,18-18V415.32a18,18,0,0,0-18-18h-3.42V201.11a29.46,29.46,0,0,1,21.28,28.16V325.4a45.28,45.28,0,0,0,90.55,0V229.27A8,8,0,0,0,436.05,225.13ZM330.8,415.32V438a2,2,0,0,1-2,2h-236a2,2,0,0,1-2-2V415.32a2,2,0,0,1,2-2h236A2,2,0,0,1,330.8,415.32Zm-218.58-18V84a12,12,0,0,1,12-12H297.38a12,12,0,0,1,12,12v313.3Zm309-142.65a20,20,0,0,1-8.87-38l8.87,14.84Z"/></svg>
                            </figure>
                        </button>
                        <button class="btn addDebet" data-action="add-other">+ Прочее</button>
                    </div>
                </div>
            </div>
            
            
</div>

<div class="modal">
    <div class="modal-body" id="modalAddCar" style="display: none">
        <h3>Добавление нового автомобиля</h3>
        <form>
            <table>
                <tr><td><label>Наименование</label></td><td><input type="text" name="title" required></td></tr>                
                <tr><td><label>Гос. номер</label></td><td><input type="text" name="number" required></td></tr>
                <tr><td><label>Дата приобретения</label></td><td><input type="datetime" name="buy" required></td></tr>
                <tr><td><label>Цена</label></td><td><input type="number" name="cost" required></td></tr>
            </table>
            <div class="button-row">
                <button class="btn btn-add" data-action="add">Добавить</button>
                <button class="btn" data-action="cancel">Отмена</button>
            </div>
        </form>
    </div>
    <div class="modal-body" id="modalAddFuel" style="display: none">
        <h3>Заправка автомобиля</h3>
        <form>
            <table>
                <tr><td><label>Дата</label></td><td><input type="date" name="date" required></td></tr>                
                <tr><td><label>АЗС</label></td><td><input type="text" name="azs" required></td></tr>
                <tr><td><label>Кол-во литров</label></td><td><input type="number" name="value" required></td></tr>
                <tr><td><label>Цена</label></td><td><input type="number" name="cost" required></td></tr>
            </table>
            <div class="button-row">
                <button class="btn btn-add" data-action="add">Добавить</button>
                <button class="btn" data-action="cancel">Отмена</button>
            </div>
        </form>
    </div>
    <div class="modal-body" id="modalAddRepair" style="display: none">
        <h3>Ремонт автомобиля</h3>
        <form>
            <table>
                <tr><td><label>Дата</label></td><td><input type="date" name="date" required></td></tr>                
                <tr><td><label>СТО</label></td><td><input type="text" name="sto" required></td></tr>
                <tr><td><label>Сумма</label></td><td><input type="number" name="cost" readonly></td></tr>
            </table>
            <h4>Спецификация</h4>
            <button type="button" class="btn" data-action="add-specification" style="display: none;">Добавить спецификацию</button>
            <div class="button-row">
                <button class="btn btn-add" data-action="add">Добавить</button>
                <button class="btn" data-action="cancel">Отмена</button>
            </div>
        </form>
    </div>
</div>



<script>
$(document).ready(function(){


    // СПЕЦИФИКАЦИЯ РЕМОНТА
    // При запуске проверяю сохраненную спецификацию ремонта
    // Если ее нет, то создаю пустой массив
    let _spec = localStorage.getItem('specification');
    var repairSpecification = JSON.parse(_spec) || []

    if ( repairSpecification.length == 0 ) {
        $()
    }


    var carInfoTemplate = $('.__carInfoTemplate').html()

    // Обрабатываю нажатие на кнопки добавления расхода

    $(document).on('click', '.addDebet', function() {
        switch ($(this).data('action')) {
            case 'add-repair':
                $('.modal').fadeIn(100)
                $('#modalAddRepair').fadeIn( function() {
                    $("#modalAddRepair").animate({
                        right: "0px"
                    }, 100)
                })  
                break;
            case 'add-fuel' :
                $('.modal').fadeIn(100)
                $('#modalAddFuel').fadeIn( function() {
                    $("#modalAddFuel").animate({
                        right: "0px"
                    }, 100)
                })  
                break;
            case 'add-other':
                break;
        }
    })

    $('#modalAddFuel .btn').on('click', function() {
        let dataAction = $(this).attr('data-action')
        $(this).attr("type", "button")

        switch(dataAction) {
            case 'add':
                let data = {
                    date: $('#modalAddFuel input[name="date"]').val(),
                    azs: $('#modalAddFuel input[name="azs"]').val(),
                    value: $('#modalAddFuel input[name="value"]').val(),
                    cost: $('#modalAddFuel input[name="cost"]').val(),
                    id: uuid(),
                    _id: $('.info-cars').data('id')
                }

                $.ajax({
                    method: 'POST',
                    url: '/api/fuel',
                    dataType: 'JSON',
                    data,
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response)
                        }
                        $('#modalAddFuel').fadeOut( function() {
                        $("#modalAddFuel").animate({
                            right: "-500px"
                        }, 100)
                    })  
                $('.modal').fadeOut(100) 
                    }
                })
            
                break;
            
            case 'cancel':
                $('#modalAddFuel').fadeOut( function() {
                    $("#modalAddFuel").animate({
                        right: "-500px"
                    }, 100)
                })  
                $('.modal').fadeOut(100)                
                break;
        }
    })


    // Построение таблицы с информацией об автомобиле

    $('.list-cars__item').on('click', function(e) {
        if ($(this).hasClass("active")) return 
        $('.list-cars__item.active').removeClass('active')
        $(this).addClass("active")
        $('.info-cars').data('id', $(this).data('id'))

        $.ajax({
            method: 'GET',
            dataType: 'JSON',
            url: '/api/car/' + $(this).data('id'),
            success: function (response) {
                console.log(response)
                $('.info-cars').html(carInfoTemplate)
                $('.info-cars').find('.buyInfo').show()
                $('.info-cars').find('.buyCost').text(response.data[0].cost)
                $('.info-cars').find('.buyDate').text(response.data[0].buy)
                
            }
        })
    })

    

    $('.btn').on('click', function() {
        let dataAction = $(this).attr('data-action')
        $(this).attr("type", "button")

        switch(dataAction) {
            case 'add-car':
                
                $('.modal').fadeIn(100)
                $('#modalAddCar').fadeIn( function() {
                    $("#modalAddCar").animate({
                        right: "0px"
                    }, 100)
                })  
                break;
            
            case 'add':
                let data = {
                    id: uuid(),
                    title: $('#modalAddCar input[name="title"]').val(),
                    number: $('#modalAddCar input[name="number"]').val(),
                    buy: $('#modalAddCar input[name="buy"]').val(),
                    cost: $('#modalAddCar input[name="cost"]').val(),
                }

                $.ajax({
                    method: 'POST',
                    url: '/api/car',
                    dataType: 'JSON',
                    data,
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response)
                        }
                        $('#modalAddCar').fadeOut( function() {
                        $("#modalAddCar").animate({
                            right: "-500px"
                        }, 100)
                    })  
                $('.modal').fadeOut(100) 
                    }
                })
            
                break;
            
            case 'cancel':
                $('#modalAddCar').fadeOut( function() {
                    $("#modalAddCar").animate({
                        right: "-500px"
                    }, 100)
                })  
                $('.modal').fadeOut(100)                
                break;
        }
    })

})
    
</script>