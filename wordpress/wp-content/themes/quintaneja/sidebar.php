        <div id="barra-lateral-direita" class="grid_4">

            <div class="videos">
                <div class="cabecalho-box">
                    <h1>Vídeos</h1>
                </div>

                <div class="video-embedded">
                    <object width="250" height="250">
                        <param name="movie" value="https://www.youtube.com/v/videoseries?listType=playlist&list=PLBCE1D63BC3C313B0&autoplay=1&modestbranding=1&version=3"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <param name="allowScriptAccess" value="always"></param>
                        <embed src="https://www.youtube.com/v/videoseries?listType=playlist&list=PLBCE1D63BC3C313B0&autoplay=1&modestbranding=1&version=3" 
                               type="application/x-shockwave-flash" 
                               allowfullscreen="true" 
                               allowScriptAccess="always" 
                               width="250" 
                               height="250">
                        </embed>
                    </object>       
                </div> <!-- endOf Vídeo embedded -->
            </div> <!-- endOf Vídeos -->

            <div class="player-musica">
                <div class="cabecalho-box">
                    <h1>Música</h1>
                </div>

                <div class="player">
                    <?php
                    $playlist = get_bloginfo('url') . '/wp-content/fmp-jw-files/playlists/fmp_jw_widget_playlist.xml';
                    $configs = get_bloginfo('url') . '/wp-content/fmp-jw-files/configs/fmp_jw_widget_config.xml';

                    $args = array(
                      'config_url' => $configs,
                      'playlist_url' => $playlist,
                      'width' => 230,
                      'height' => 350,
                      'id' => '',
                      'class' => '',
                      'transparent' => true,
                      'autostart' => false,
                      'file' => ''
                    );

                    fmp_tag_print_player($args);

                    ?>
                </div> <!-- endOf Player -->
            </div> <!-- endOf Player de música -->

            <div class="ingressos">

                <div class="cabecalho-box">
                    <h1>Ingressos</h1>
                </div>

                <div class="ingresso-antecipado">
                    <div class="mensagem-ingresso">
                        <a href="<?php bloginfo('url'); ?>/ingressos">
                            Compre os ingressos antecipados
                        </a>
                    </div> <!-- endOf Mensagem sobre ingressos antecipados -->
                </div> <!-- endOf Ingresso Antecipado -->

                <div class="pontos-de-venda">
                    <div class="mensagem-pontos-de-venda">
                        <a href="<?php bloginfo('url'); ?>/ingressos">
                            Conheça os pontos<br /> de venda
                        </a>
                    </div> <!-- endOf Mensagem sobre pontos de venda -->
                </div> <!-- endOf Pontos de venda -->

            </div> <!-- endOf Ingressos -->

        </div> <!-- endOf Barra lateral direita -->