<?php
/**
 * OrtigueiraPlant improvements — WhatsApp button + HTTPS logo fix
 * Loaded via mu-plugins, always active
 */

// 1. WhatsApp floating button
add_action('wp_footer', function() {
    ?>
    <style>
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 30px;
        right: 30px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: transform 0.2s;
    }
    .whatsapp-float:hover {
        transform: scale(1.1);
        color: #fff;
    }
    .whatsapp-float svg {
        width: 34px;
        height: 34px;
        fill: #fff;
    }
    </style>
    <a href="https://wa.me/34639882910" target="_blank" rel="noopener" class="whatsapp-float" title="Escríbenos por WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
    <?php
});

// 2. Force HTTPS for all internal URLs
add_filter('the_content', function($content) {
    return str_replace('http://www.ortigueiraplant.com', 'https://www.ortigueiraplant.com', $content);
});

add_filter('wp_get_attachment_url', function($url) {
    return str_replace('http://', 'https://', $url);
});

// 3. Fix logo URLs (http→https) for theme header
add_filter('wp_calculate_image_srcset', function($sources) {
    foreach ($sources as $key => $source) {
        $sources[$key]['url'] = str_replace('http://', 'https://', $source['url']);
    }
    return $sources;
});

// 4. Remove fax from footer widget (via CSS hide — non-destructive)
add_action('wp_head', function() {
    ?>
    <style>
    /* Hide fax info — obsolete contact method */
    .q_font_awesome_icon_widget .icon_text_holder:has([href*="fax"]),
    .footer_inner .widget_text p:contains("Fax") { display: none; }
    </style>
    <?php
});