<?php

/* TMSAuthorsBundle:Authors:footer.html.twig */
class __TwigTemplate_70e6deecd03d1b5297160515a8e3149cea69d22077ce700b477091b79118efc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse navbar-fixed-bottom\" style=\"background-size: 100px 66px;\">
            <a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_FeaturedMusic\" class=\"open_player_link hidden-xs\">Open Player</a>
            <div class=\"container site_footer_bar\">
                <div class=\"navbar-collapse collapse player_slider_navbar  visible-xs\">
                    <div class=\"panel-group collapse visible-xs\" id=\"player_slider_menu\" style=\"height: 0px;\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"#now_playing_collapse\">
                                        Now Playing
                                        <span class=\"caret-down pull-right\"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id=\"now_playing_collapse\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div style=\"position: relative;top: -5px; text-align: right;\" class=\"col-xs-12\">
                                        <a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_NowPlayingHistory\" class=\"grey\">View History</a>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <br>
                                    <div class=\"col-xs-12\" style=\"padding-left: 65px; padding-right: 65px;\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6 col-xxs-12\">
                                                <img class=\"img-responsive\" src=\"images/fmusic4.jpg\">
                                                <br>
                                                <div class=\"col-xs-12 white text-center\">
                                                    <div><a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" class=\"white\">Track Name</a></div>
              <div><a href=\"../../prototype-general-flat/prototypes/index.html#Profile_PromoCover_Picture\" class=\"white\">Main Artist Name</a></div>
              <div><a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" class=\"white\">Album Title</a></div>
              <div><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\" class=\"white\">Genre</a></div>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-6 col-xxs-12 hidden-xxs\">
                                                <img class=\"img-responsive\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/fmusic5.jpg"), "html", null, true);
        echo "\">
                                                <br>
                                                <div class=\"col-xs-12 white text-center\">
                                                    <div><a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" class=\"white\">Track Name</a></div>
              <div><a href=\"../../prototype-general-flat/prototypes/index.html#Profile_PromoCover_Picture\" class=\"white\">Main Artist Name</a></div>
              <div><a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" class=\"white\">Album Title</a></div>
              <div><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\" class=\"white\">Genre</a></div>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12 text-center\">
                                                <a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" class=\"grey\">View Music Page</a><br>
                                                <a href=\"#\" class=\"grey\">Add to Favourites</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_ViewQueue\">
                                        View Queue
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_FeaturedMusic\">
                                        Featured Music
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_RecommenededAlbums\">
                                        Recommended Albums
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_RecommenededTracks\">
                                        Recommended Tracks
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_RecommenededMusicVideos\">
                                        Recommended Music Videos
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"#browse_by_genre_collapse\">
                                        Browse By Genre
                                        <span class=\"caret-down pull-right\"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id=\"browse_by_genre_collapse\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"col-xs-12\">
                                        <ul class=\"player_genre_list\">
                                            <li><a href=\"#\">Acapella</a></li>
                                            <li><a href=\"#\">Adult Contemporary</a></li>
                                            <li><a href=\"#\">Alternative</a></li>
                                            <li><a href=\"#\">Ambient</a></li>
                                            <li><a href=\"#\">Blues</a>
                                                <ul style=\"display: none;\">
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Acoustic Blues)</a></li>
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Chicago Blues)</a></li>
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Classic Blues)</a></li>
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Contemporary Blues)</a></li>
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Country Blues)</a></li>
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Delta Blues)</a></li>
                                                    <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#Browse_Music_Homepage\">(Electric Blues)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Christian/Gospel</a></li>
                                            <li><a href=\"#\">Classical</a></li>
                                            <li><a href=\"#\">Country/Western</a></li>
                                            <li><a href=\"#\">Dance/House</a></li>
                                            <li><a href=\"#\">Dancehall</a></li>
                                            <li><a href=\"#\">Disco</a></li>
                                            <li><a href=\"#\">Drum 'n' Bass</a></li>
                                            <li><a href=\"#\">Dubstep</a></li>
                                            <li><a href=\"#\">Electronic</a></li>
                                            <li><a href=\"#\">Folk</a></li>
                                            <li><a href=\"#\">Funk/Funky</a></li>
                                            <li><a href=\"#\">Garage</a></li>
                                            <li><a href=\"#\">Hip-Hop/Rap</a></li>
                                            <li><a href=\"#\">Holiday/Celebration</a></li>
                                            <li><a href=\"#\">Indie</a></li>
                                            <li><a href=\"#\">Inspirational/Spiritual</a></li>
                                            <li><a href=\"#\">Jazz</a></li>
                                            <li><a href=\"#\">Latino</a></li>
                                            <li><a href=\"#\">Metal</a></li>
                                            <li><a href=\"#\">Musicals/Stage</a></li>
                                            <li><a href=\"#\">Pop</a></li>
                                            <li><a href=\"#\">Punk/Hardcore</a></li>
                                            <li><a href=\"#\">R&amp;B</a></li>
                                            <li><a href=\"#\">Reggae</a></li>
                                            <li><a href=\"#\">Rock &amp; Roll</a></li>
                                            <li><a href=\"#\">Rock</a></li>
                                            <li><a href=\"#\">Rockabilly</a></li>
                                            <li><a href=\"#\">Ska</a></li>
                                            <li><a href=\"#\">Soul</a></li>
                                            <li><a href=\"#\">Soundtrack</a></li>
                                            <li><a href=\"#\">Spoken/Speech</a></li>
                                            <li><a href=\"#\">World</a></li>
                                            <li><a href=\"#\">Other</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#player_slider_menu\" href=\"#myplayists_collapse\">
                                        My Playlists
                                        <span class=\"caret-down pull-right\"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id=\"myplayists_collapse\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"col-xs-12\">
                                        <ul class=\"player_playlist\">
                                            <li><a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_NewPlaylist\" class=\"new_playlist_link\">+ New Playlist</a></li>
                                            <li><a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_ViewPlaylist\">Example User Playlist 1</a></li>
                                            <li><a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_ViewPlaylist\">Example User Playlist 2</a></li>
                                            <li><a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_ViewPlaylist\">Example User Playlist 3</a></li>
                                            <li><a href=\"../../prototype-player-flat/prototypes/index.html#MediaPlayer_ViewPlaylist\">Example User Playlist 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"navbar-header text-center\">
                    <span class=\"player_button_container mobile\">
                        <a href=\"#\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_prev.png"), "html", null, true);
        echo "\" alt=\"\" height=\"18\"></a>
                        <a href=\"#\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_play.png"), "html", null, true);
        echo "\" alt=\"\" height=\"25\"></a>
                        <a href=\"#\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_next.png"), "html", null, true);
        echo "\" alt=\"\" height=\"18\"></a>
                    </span>
                    <button type=\"button\" class=\"navbar-toggle player_bottom_menu_icon\" data-toggle=\"collapse\" data-target=\"#player_slider_menu\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <div class=\"navbar-collapse collapse menu3 hidden-xs\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center\">
                            <ul class=\"player_container\" style=\"display: inline-block; padding-left: 0px;\">
                                <li class=\"player_button_container  text-right text-center-xs\">
                                    <a href=\"#\"><img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_prev.png"), "html", null, true);
        echo "\" alt=\"\" height=\"18\"></a>
                                    <a href=\"#\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_play.png"), "html", null, true);
        echo "\" alt=\"\" height=\"25\"></a>
                                    <a href=\"#\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_next.png"), "html", null, true);
        echo "\" alt=\"\" height=\"18\"></a>
                                </li>
                                <li class=\"player_art_container hidden-xs\">
                                    <a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/played-song-pic.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </li>
                                <li class=\"player_song_details hidden-xs\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/music-small.png"), "html", null, true);
        echo "\" alt=\"\">
                                            <a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" class=\"white\">Song Title</a>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/people-small.png"), "html", null, true);
        echo "\">
                                            <a href=\"../../prototype-general-flat/prototypes/index.html#Profile_PromoCover_Picture\" class=\"grey\">Artist Name</a>, <a href=\"../../prototype-general-flat/prototypes/index.html#Profile_PromoCover_Picture\" class=\"grey\">Featured Artist</a>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 grey\">
                                            <div class=\"player_progress_bar_container\">
                                                <div class=\"player_progress_bar\" style=\"width: 25%;\"></div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class=\"player_song_timer hidden-xs\">
                                    <div class=\"row\">
                                        <div class=\"player_control_icons grey\">
                                            <a href=\"javascript:void(0)\" class=\"whiteLink\">
                                                <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_shuffle_icon.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </a>
                                            &nbsp;
                                            <a href=\"#\" data-position=\"top\" data-toggle=\"dropdown\" class=\"whiteLink player_bar_plus_btn dropdown-toggle dropup\">
                                                <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_plus_icon.png"), "html", null, true);
        echo "\" alt=\"\" height=\"17\">
                                            </a>
                                            <ul class=\"dropdown-menu player_bar_plus_dd pull-right player_action_dropdown\" role=\"menu\">
                                                <li class=\"\" style=\"background-color:#000;\">&nbsp;</li>
                                                <li><a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" tabindex=\"-1\">Comment</a></li>
                                                <li><a href=\"#\" tabindex=\"-1\">Like</a></li>
                                                <li><a href=\"../../prototype-general-flat/prototypes/index.html#Share_Media_Pop_Up\" tabindex=\"-1\">Share</a></li>
                                                <li><a href=\"../../prototype-general-flat/prototypes/index.html#Music_Add_To_Pop_Up\" tabindex=\"-1\">+ Add To</a></li>
                                                <li style=\"background-color:#eee;border-bottom:none;\"><a href=\"../../prototype-music-module-flat/prototypes/index.html#View_Music_Page\" tabindex=\"-1\">Open Track Page</a></li>
                                                <li style=\"background-color:#eee;\"><a href=\"../../prototype-general-flat/prototypes/index.html#Profile_PromoCover_Picture\" tabindex=\"-1\">View artist</a></li>
                                            </ul>
                                            &nbsp;
                                            <a href=\"javascript:void(0)\" class=\"whiteLink\">
                                                <img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_list_icon.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </a>
                                            &nbsp;
                                            <a href=\"javascript:void(0)\" class=\"whiteLink volume_icon\">
                                                <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tms_media/images/player_volume1_icon.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"song_ticker grey\">
                                            <span class=\"white\">00:00</span> <span class=\"grey\">/04:26</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "TMSAuthorsBundle:Authors:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 266,  318 => 262,  302 => 249,  295 => 245,  275 => 228,  266 => 222,  258 => 217,  252 => 214,  248 => 213,  244 => 212,  227 => 198,  223 => 197,  219 => 196,  55 => 35,  19 => 1,);
    }
}
