@if ($paginator->getLastPage() > 1)


<?php $previousPage = ($paginator->getCurrentPage() > 1) ? $paginator->getCurrentPage() - 1 : 1; 
$traduccion = $environment->getTranslator();?>  


<style type="text/css">
  a.disabled {
   pointer-events: none;
   cursor: default;
  }
</style>

<ul class="pagination" role="menubar" aria-label="Pagination"> 
  <li class="arrow " >
    <a href="{{ $paginator->getUrl($previousPage) }}"
      class="item{{ ($paginator->getCurrentPage() == 1) ? ' disabled unavailable' : '' }}">
      <?php echo $traduccion->trans('paginacion.previous'); ?>
    </a>
  </li>


  @for ($i = 1; $i <= $paginator->getLastPage(); $i++)
  <li class="item{{ ($paginator->getCurrentPage() == $i) ? ' active current' : '' }}" value="{{ $i }}">
    <a href="{{ $paginator->getUrl($i) }}"
      >
        {{ $i }}
    </a>
  </li>
  @endfor





  <li  class="arrow">
    <a href="{{ $paginator->getUrl($paginator->getCurrentPage()+1) }}"
      class="item{{ ($paginator->getCurrentPage() == $paginator->getLastPage()) ? ' disabled  unavailable' : '' }}">
      <?php echo $traduccion->trans('paginacion.next'); ?>
    </a>
  </li>
  <?php  $paginator->getLastPage() ?>



</ul>  
@endif











<!--
<?php
/*$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
    $traduccion = $environment->getTranslator();*/
?>

<?php /*if ($paginator->getLastPage() > 1): ?>
    <div class="pagination">
        <ul class="pagination" role="menubar" aria-label="Pagination">
            <?php echo getPrevious($paginator->getCurrentPage(), $paginator->getUrl( $paginator->getCurrentPage()-1 ), $traduccion ) ?>
            <?php echo $presenter->getPageRange(1, $paginator->getLastPage() ); ?>
            <?php echo getNext($paginator->getCurrentPage(), $paginator->getLastPage(), $paginator->getUrl( $paginator->getCurrentPage()+1 ),$traduccion )  ?>
        </ul>
    </div>
<?php endif; ?>

<?php
function getPrevious($currentPage, $url,$traduccion)
{
    if ($currentPage <= 1)
        return '<li class="previous disabled">'.$traduccion->trans('paginacion.previous').'<span class="icon-chevron-left"></span></li>';
    else
       return '<li class="previous" class="arrow unavailable" aria-disabled="true"><a class="icon-chevron-left" href="'.$url.'">'.$traduccion->trans('paginacion.previous').'</a></li>';
}

function getNext($currentPage, $lastPage, $url, $traduccion)
{
    if ($currentPage >= $lastPage)
        return '<li class="next disabled">'.$traduccion->trans('paginacion.next').'<span class="icon-chevron-right"></span></li>';
    else
        return '<li class="next"><a class="icon-chevron-right" href="'.$url.'">'.$traduccion->trans('paginacion.next').'</a></li>';
}*/
?>-->