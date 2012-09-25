        <div id="barra-lateral-direita" class="grid_4">

            <div class="videos">
                <div class="cabecalho-box">
                    <h1>Vídeos</h1>
                </div>

                <div class="video-embedded">
                    <object width="250" height="250">
                        <param name="movie" value="https://www.youtube.com/v/videoseries?listType=playlist&list=ALYL4kY05133ohSYUqR_phVX8cJdxXbe5_&autoplay=1&modestbranding=1&version=3"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <param name="allowScriptAccess" value="always"></param>
                        <embed src="https://www.youtube.com/v/videoseries?listType=playlist&list=ALYL4kY05133ohSYUqR_phVX8cJdxXbe5_&autoplay=1&modestbranding=1&version=3" 
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
                    $args = array(
                      //the entire url of the config file, must
                      'config_url' => 'http://127.0.0.1/server/quintaneja/wordpress/wp-content/fmp-jw-files/configs/fmp_jw_widget_config.xml',
                      //the entire url of the playlist file (optional)
                      'playlist_url' => 'http://127.0.0.1/server/quintaneja/wordpress/wp-content/fmp-jw-files/playlists/fmp_jw_widget_playlist.xml',
                      'width' => 230,
                      'height' => 350,
                      'id' => '',
                      'class' => '',
                      'transparent' => true,  //this is default
                      'autostart' => false,  //this is default
                      'file' => '' //the entire url of the MP3 file (optional)
                    );
                    //you should set either "playlist_url" or "file"
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