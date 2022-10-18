<style>
    .plan-card {
        background-color: #d9d9d9;
        border-radius: 10px;
        width: 320px;
        height: 140px;
        display: flex;
        flex-direction: column;
        text-align: right;
        padding: 8px;
        box-sizing: border-box;
        /* background-image: linear-gradient(90deg, #d9d9d900, #d9d9d9ff, #d9d9d9ff), url('res/img/images.jpg'); */
        background-size: 100%, contain;
        background-repeat: no-repeat;
    }
    .plan-card * {
        margin-right: 0;
        margin-left: auto;
    }
    .plan-card__name{
        font-size: 1.4em;
    }
    .plan-card__infos{
        font-size: .8em;
    }
    .plan-card__price {
        font-size: 1em;
        margin-top: auto;
        margin-bottom: auto;
    }
    .plan-card__link {
        font-size: 1em;
        margin-bottom: 0;
    }
</style>
<div class="plan-card" style="background-image: linear-gradient(90deg, #d9d9d900, #d9d9d9ff, #d9d9d9ff), url('res/img/card-placeholder.jpg');">
    <!--
        Il faut mettre l'image en attribut style ici pour l'avoir dans le fond, avec le dégradé par dessus.
    -->
    <div class="plan-card__name">Les vins bordelais</div>
    <div class="plan-card__infos"><span class="plan-card__infos__days">3</span> jours - <span class="plan-card__infos__steps">5</span> étapes</div>
    <div class="plan-card__price"><span>69</span> € / pers.</div>
    <a class="plan-card__link" href="">oui</a>
</div>