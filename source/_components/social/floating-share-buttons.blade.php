<ul id="floating-share-buttons">
    <li>
        <a href="https://telegram.me/share/url?url={{ $page->getUrl() }}&text={{ urlencode('Recomendação de leitura: '. $page['title']) }}"
           class="share-telegram">
            <i class="fa-brands fa-telegram"></i>
        </a>
    </li>
    <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $page->getUrl() }}"
           class="share-facebook">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
    </li>
    <li>
        <a href="https://twitter.com/share?url={{ $page->getUrl() }}&text={{ urlencode('Recomendação de leitura: '. $page['title']) }}"
           class="share-twitter">
            <i class="fa-brands fa-twitter"></i>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/shareArticle?url={{ $page->getUrl() }}&title={{ urlencode($page['title']) }}&summary={{ urlencode($page['description']) }}&source={{ $page->getUrl() }}"
           class="share-linkedin">
            <i class="fa-brands fa-linkedin"></i>
        </a>
    </li>
    <li>
        <a href="https://api.whatsapp.com/send?text={{ urlencode('Recomendação de leitura: '. $page['title'] . '. Link: ' . $page->getUrl()) }}"
           class="share-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </li>
    <li>
        <a href="mailto:?subject={{ urlencode('Recomendação de leitura: '. $page['title']) }}&body={{ urldecode($page['description']) }}"
           class="share-mail">
            <i class="fa-solid fa-envelope"></i>
        </a>
    </li>
</ul>