<section id="form_feedback">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>ЗВОРОТНІЙ ЗВ'ЯЗОК</h2>
                <p>Якщо маєте скарги або пропозиції - обов'язково повідомте нас і ми з вами зв'яжемось</p>
                <form class="form" action="form_active.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input required type="text" name="name"  placeholder="Ваше Ім'я*">
                        </div>
                        <div class="col-md-6">
                            <input required type="text" name="surname"  placeholder="Ваше Прізвище*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="phone"  placeholder="Номер телефону">
                        </div>
                        <div class="col-md-6">
                            <input required type="text" name="mail"  placeholder="E-mail*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea required name="subject" placeholder="Текст повідомлення*"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Надіслати">
                </form>
            </div>
        </div>
    </div>
</section>