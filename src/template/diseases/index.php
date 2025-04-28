<?
namespace classes;

use PDO;

$id = diseases::getUserID($pr_element,'dis');
$element = diseases::getElement($id);

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <!-- Ну тут типо header должен быть, но давайте без меня -->
    <div style="height: 100px;"><h1 class="text-center">ТИПА ХЕДЕР</h1></div>
    <!-- Ну тут типо header должен быть, но давайте без меня -->

    <!-- main-block -->
    <div class="main-slider-top">
        <div class="main-block-slider owl-carousel">
            <div class="container d-flex flex-column p-5 def-border-rad align-items-start" style="background-color: #ffa230;">
                <h1 class="fw-bold text-white col-6">Укрепляем здоровье с витаминами Dr. Verdi</h1>
                <div class="mt-2">Новейшие технологии производства позволяют достичь оптимального баланса ингредиентов, необходимых для здоровья организма.</div>
                <div class="mt-3 button">Забрать за 15 минут</div>
            </div>
            <div class="container d-flex flex-column p-5 def-border-rad align-items-start" style="background-color: #ffa230;">
                <h1 class="fw-bold text-white col-6">Укрепляем здоровье с витаминами Dr. Verdi</h1>
                <div class="mt-2">Новейшие технологии производства позволяют достичь оптимального баланса ингредиентов, необходимых для здоровья организма.</div>
                <div class="mt-3 button">Забрать за 15 минут</div>
            </div>
        </div>
        <script>
            $(window).on('load', function () {
                $('.main-block-slider.owl-carousel').owlCarousel({
                    margin: 0,
                    nav: false,
                    dots: false,
                    loop: false,
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
            })
        </script>
    </div>
    <!-- main-block -->

    <!-- main-content -->
    <div class="main-container d-flex">
            <div class="main-content def-shadow">
                <!-- ХЛЕБНЫЕ КРОШКИ -->
                <div class="breadcrumbs">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs-subtitle">Главная</a>
                        <div class="chevron-right">
                            <!-- <img src="/template/diseases/img/chevron-right.svg" alt="chevron-right"> -->
                        </div>
                        <a class="breadcrumbs-subtitle">О нас</a>
                        <div class="chevron-right active">
                            <img src="/template/diseases/img/chevron-right.svg" alt="chevron-right">
                        </div>
                        <a class="breadcrumbs-subtitle">Сведения об организации</a>
                    </div>
                </div>
                <!-- ХЛЕБНЫЕ КРОШКИ -->

                <!-- Основной контент -->
                <?=$element[0];?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-slider-doctors.php';?>
                <?=$element[1];?>
                <div class="main-content-block-choice">
                    <h3 class="block-choice-title main-smaller-title">Как выбрать терапевта?</h3>
                    <p class="main-text">Посещение терапевта в семейной клинике «МЕДЭП» в Новых Ватутинках гарантирует вам получение качественной медицинской помощи экспертного уровня, так как все специалисты проходят своевременное обучение и повышение квалификации по своему профилю, участвуют консилиумах между филиалами, а также имеют возможность получить консультацию у ведущих специалистов Москвы и России (профессоров, докторов и кандидатов медицинских наук).</p>
                </div>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-ad-sale.php';?>
                <div class="main-content-block-method mt-main">
                    <h3 class="block-method-title main-smaller-title">Как проходит прием у терапевта? </h3>
                    <div class="block-method-text-img d-flex justify-content-between">
                        <div class="block-method-img">
                            <img class="method-img img-hover" src="/template/diseases/img/main-content-img2.jpg" alt="">
                        </div>
                        <div class="method-text">
                            <p class="method-text-title">Прием у терапевта проходит по следующему сценарию:</p>
                            <p class="main-text">Врач терапевт – медицинский специалист, который проводит прием взрослых пациентов – лиц достигших 18-летнего возраста и старше. Именно этот врач занимается диагностикой, лечением и профилактикой заболеваний широкого спектра.  </p>
                            <p class="main-text">Терапевт определяет природу заболевания и при необходимости направляет к специалистам узкого профиля, таким как гастроэнтеролог, кардиолог, невролог и др. Первым действием при недомогании, вялости или признаках простуды должен быть поход к терапевту или вызов данного специалиста на дом. </p>
                            <p class="main-text">Консультация терапевта необходима людям с хроническими заболеваниями, людям с предстоящей операцией, в состоянии беременности или тем, кто планирует записаться в спортивную секцию или оздоровительный клуб без вреда для своего здоровья. </p>
                        </div>
                    </div>
                </div>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-ad-therapy.php';?>
                <?=$element[2];?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-ad-middle.php';?>
                <?=$element[3];?>

                <!-- запись на прием -->
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-appointment.php';?>
                <!-- запись на прием -->

                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-share.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-promotions.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-product.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-block-events.php';?>
                <!-- Основной контент -->
            </div>
            <div class="sidebar-container">
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-address.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-banner.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-medication.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-banner-therapy.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-banner-sail.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-news.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-score.php';?>
                <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/side-block-doctor.php';?>
            </div>
    </div>


    <!-- main-content -->
    <div class="max-width">
        <?require $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/templates/main-content-bottom-subscribe.php';?>
    </div>
    <?require_once $_SERVER['DOCUMENT_ROOT'] . '/template/diseases/tpl/footer.php'?>
</body>
</html>