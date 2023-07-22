<div class="header__explore px-30 xl:px-20 -before-border -after-border xl:d-none">
  <a href="#" class="d-flex  items-center" data-el-toggle=".js-explore-toggle">
    <i class="icon icon-explore mr-15"></i>
    Jelajahi
  </a>

  @foreach ($dataBySekbid as $sekbid => $eskuls)
      @if ($sekbid == 0)
    <div class="explore-content py-25 rounded-8 bg-white toggle-element js-explore-toggle">
      <div class="explore__item">
        @foreach ($eskuls as $eskul)
            <a class="text-dark-1" href="{{ route('ex', $eskul->slug) }}">{{ $eskul->nama_eskul }}</a>
        @endforeach
    </div>
    @endif
      @endforeach
    
      @foreach ($dataBySekbid as $sekbid => $eskuls)
      @if ($sekbid != 0)
          <div class="explore__item">
              <a href="#" class="d-flex items-center justify-between text-dark-1">
                  Sekbid {{ $sekbid }}<div class="icon-chevron-right text-11"></div>
              </a>
              <div class="explore__subnav rounded-8">
                  @foreach ($eskuls as $eskul)
                      <a class="text-dark-1" href="{{ route('ex', $eskul->slug) }}">{{ $eskul->nama_eskul }}</a>
                  @endforeach
              </div>
            </div>
            @endif
      @endforeach

