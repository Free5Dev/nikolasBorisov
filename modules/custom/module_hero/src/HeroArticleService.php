<?php 

namespace Drupal\module_hero;

/**
 * Our Hero article service class
 */

 class HeroArticleService {
     /**
      * Methood for getting regarding heroes
      */
      public function getHeroArticles(){
          $articles = ['Hulk is green', 'Flash is red ! '];

          return $articles;
      }
 }