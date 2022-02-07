<!-- ====== Footer Start ====== -->
<footer class="ud-footer wow fadeInUp" style="background-color:#3C9EE0; " data-wow-delay=".15s">



    <div class="ud-footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="ud-widget">
                        <a href="#!" class="ud-footer-logo">
                            <img src="/images/logotipo/footer.png">
                        </a>
                        <p class="ud-widget-desc">
                            A Comissão Nacional Eleitoral é um orgão independente que organiza, executa, coordena e
                            conduz os processos eleitorais.
                        </p>
                        <ul class="ud-widget-socials">
                            <li>
                                <a href="{{ $configuration->facebook }}" target="_blank">
                                    <i class="lni lni-facebook-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $configuration->twitter }}" target="_blank">
                                    <i class="lni lni-twitter-filled"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $configuration->instagram }}" target="_blank">
                                    <i class="lni lni-instagram-filled"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">A CNE</h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="{{ url('/definição') }}">Definição</a>
                            </li>
                            <li>
                                <a href="{{ url('/estrutura-organica') }}">Estrutura Orgânica</a>
                            </li>
                            <li>
                                <a href="{{ url('/regulamentos') }}">Regulamentos</a>
                            </li>
                            <li>
                                <a href="{{ url('/directivas') }}">Directivas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">COMISSÃO ACTUAL</h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="{{ route('site.president') }}">Presidente</a>
                            </li>
                            <li>
                                <a href="{{ url('/mandato') }}">Mandato</a>
                            </li>
                            <li>
                                <a href="{{ url('/composição') }}">Composição</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">PUBLICAÇÕES</h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="{{ route('site.announcent') }}">Anúncios</a>
                            </li>
                            <li>
                                <a href="{{ url('/impressos') }}">Impressos</a>
                            </li>
                            <li>
                                <a href="{{ route('site.news') }}">Notícias</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">Media</h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="{{ route('site.audio') }}">Áudios</a>
                            </li>
                            <li>
                                <a href="{{ route('site.gallery') }}">Galeria de Imagens</a>
                            </li>
                            <li>
                                <a href="{{ route('site.videos') }}">Vídeos</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="ud-footer-bottom">
        <div class="container">
            <div class="row">
                <!--
                <div class="col-md-8">
                    <ul class="ud-footer-bottom-left">
                        <li>
                            <a href="javascript:void(0)">Políticas de Privacidade</a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">Termos e Serviços</a>
                        </li>
                    </ul>
                </div>
            -->
                <div class="col-md-4">
                    <p class="ud-footer-bottom-right text-white">CNE © Todos os Direitos Reservados
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- ====== Footer End ====== -->

<!-- ====== Back To Top Start ====== -->
<a href="javascript:void(0)" class="back-to-top">
    <i class="lni lni-chevron-up"> </i>
</a>
<!-- ====== Back To Top End ====== -->

<!-- ====== All Javascript Files ====== -->
<script src="/site/js/bootstrap.bundle.min.js"></script>
<script src="/site/js/wow.min.js"></script>
<script src="/site/js/main.js"></script>
<script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

    window.document.addEventListener("scroll", onScroll);
</script>
</body>

</html>
