<div id="content-wrapper-parent">
    <div id="content-wrapper">
      <div id="content" class="container clearfix">
        <div class="group_breadcrumb">
          <div id="breadcrumb" class="row breadcrumb">
            <div class="col-md-24">
              <a href="./index.html" class="homepage-link" title="Back to the frontpage">Home</a>
              <i class="angle-right">&gt;</i>
              <span class="page-title">Playstation 4</span>
            </div>
          </div>
        </div>
        <section class="row content">
          
          <div id="col-main" class="collection collection-page col-content col-md-19">
           
            <div id="page-header">
              <div class="row text-center">
                <h4 id="page-title">Games for Playstation 4</h4>
                <div class="col-md-22 col-md-push-1">
                  <div class="collection-description">
                    <div class="description content"><div>Donec vehicula mi sed tellus sollicitudin aliquam et sitpretium erat arcu dignissim justo in sodales erat.&nbsp;</div>
                      <div>Pellentesque egestas ante ac vestibulum pretium erat arcu dignissim justo in sodales metus arcu ac augue pretium erat arcu dignissim justo in sodales.</div></div>
                  </div>
                </div>
              </div>
            </div>
            
            <div id="options" class="container-nav clearfix">
              <p class="collect-option">Options</p>
              <ul class="list-inline text-right">
                <li>VIEW AS</li>
                <li class="grid_list hidden-phone">
                  <ul class="unstyled unmargin-bottom option-set" data-option-key="layoutMode">
                    <li data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid">
                      <i class="fa fa-th"></i>
                    </li>
                    <li data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="List">
                      <i class="fa fa-th-list"></i>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
            
            <div id="sandBox-wrapper">
              <ul id="sandBox" class="list-unstyled row isotope">
                  <?php foreach ($this->playstation4games as $ps4game): ?>
                <li class="element">
                    <ul class="row-container list-unstyled clearfix">
                      <li class="row-left">
                        <a href="./product.html" class="hoverBorder">
                          <span class="hoverBorderWrapper">
                            <img style="width:152px;height:216px;" src="<?= base_url($ps4game['image']); ?>" class="image-fly img-responsive" alt="<?= $ps4game['gamename'];?>">
                          </span>
                          
                        </a>
                      </li>
                      <li class="row-right text-left parent-fly animMix">
                        <div class="group_info">
                          <a class="title-5" href="#"><?= $ps4game['gamename'];?></a>
                          <br>
                          <a class="col-title" href="#">
                            Playstation 4
                          </a>
                        
                          <input type="hidden" name="quantity" value="1">
                          <a class="btn " href="<?= base_url('offer/add');?>">Make an offer</a>
                        </div>
                      </li>
                    </ul>
                </li>
                
                <?php endforeach; ?>
                
              </ul>
            </div>
            
            <div class="pagination title-3 clearfix">
              <div class="col-md-8 text-left"><?php echo count($this->playstation4games);?> ITEMS </div>
              
              <div class="col-md-8 text-right" id="scroll-to-top-collect"><span>TOP</span></div>
            </div>
            
          </div>
          <script type="text/javascript">
            
            $(document).ready(function() {
                imagesLoaded( '#sandBox', function() {
                  var $container = $('#sandBox');
                  
                  $container.isotope({
                    itemSelector : '.element',
                    layoutMode : 'fitRows',
                    getSortData : {
                      name : function( $elem ) {
                        return $elem.attr('data-alpha');
                      },
                      price : function( $elem ) {
                        return $elem.attr('data-price');
                      }
                    }
                  });
                  
                  
                  var $optionSets = $('#options .option-set'),
                      $optionLinks = $optionSets.find('li');
                  
                  $optionLinks.click(function(){
                    var $this = $(this);
                    // don't proceed if already selected
                    if ( $this.hasClass('selected') ) {
                      return false;
                    }
                    
                    var $direction = $(this).attr('data-order');
                    var key1 = 'sortAscending',
                        value1 = true;
                    switch($direction){
                      case 'asc':
                        value1 = true;
                        break;
                        
                      case 'desc':
                        value1 = false;
                        break;
                    }
                    
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');
                    
                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                        key = $optionSet.attr('data-option-key'),
                        value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[ key ] = value;
                    options[ key1 ] = value1;
                    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                      // changes in layout modes need extra logic
                      changeLayoutMode( $this, options )
                    } else {
                      // otherwise, apply new options
                      $container.isotope( options );
                    }
                    
                    return false;
                  });
                });
            });
          </script>
          
        </section>
      </div>
    </div>
  </div>