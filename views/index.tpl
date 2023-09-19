{include file="common/header.tpl"}
<div class="container">
    <div class="slider-container">
        <div class="swiper-wrapper">
            {foreach from=$slider item=item key=key name=name}
                <div class="swiper-slide">
                    <div class="slider-content">
                        <img src="{$APP_HOST}/public/assets/img/slider/{$item.image}" alt=""
                            onerror="this.onerror=null;this.src='{$APP_HOST}/public/assets/img/maxresdefault.jpg';">
                        <div class="slider-text">
                            <p>{$item.title}</p>
                            <div class="slider-info">
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
        <div class="swiper-pagination"></div>
        <div class="slider-navigator-prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </div>
        <div class="slider-navigator-next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </div>
</div>
{include file="common/footer.tpl"}