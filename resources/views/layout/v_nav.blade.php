<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-dashboard"></i> <span>home</span></span></a></li>
        @if (auth()->user()->level==1)
        <li class="{{ request()->is('superuser') ? 'active' : '' }}"><a href="/superuser"><i class="fa fa-dashboard"></i> <span>superuser</span></span></a></li>
        @elseif (auth()->user()->level==2)
        <li class="{{ request()->is('manajer') ? 'active' : '' }}"><a href="/manajer"><i class="fa fa-dashboard"></i> <span>manajer</span></span></a></li>
        @endif
    </section>