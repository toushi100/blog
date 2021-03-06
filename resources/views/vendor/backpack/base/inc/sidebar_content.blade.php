<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>
<li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
<li><a href='{{ backpack_url('tag') }}'><i class='fa fa-tag'></i> <span>Tags</span></a></li>
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>
<li><a href='{{ backpack_url('offer') }}'><i class='fa fa-tag'></i> <span>Add offer</span></a></li>

<li><a href='{{ backpack_url('contact') }}'><i class='fa fa-tag'></i> <span>Contacts</span></a></li>
<li><a href='{{ backpack_url('transport') }}'><i class='fa fa-tag'></i> <span>Transports</span></a></li>
<li><a href='{{ backpack_url('hotel') }}'><i class='fa fa-tag'></i> <span>Hotels</span></a></li>
<li><a href='{{ backpack_url('room') }}'><i class='fa fa-tag'></i> <span>Rooms</span></a></li>
<li><a href='{{ backpack_url('excursion') }}'><i class='fa fa-tag'></i> <span>Excursions</span></a></li>