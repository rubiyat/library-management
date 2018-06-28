<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('authors.index') }}"><i class="fa fa-user-secret fa-fw"></i> Authors</a>
            </li>
            <li>
                <a href="{{ route('publishers.index') }}"><i class="fa fa-user fa-fw"></i> Publishers</a>
            </li>
            <li>
                <a href="{{ route('members.index') }}"><i class="fa fa-user-plus"></i> Members</a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}"><i class="fa fa-check-square"></i> Category</a>
            </li>
            <li>
                <a href="{{ route('books.index') }}"><i class="fa fa-book"></i> Books</a>
            </li>
            <li>
                <a href="{{ route('authorBooks.index') }}"><i class="fa fa-book"></i> Author books</a>
            </li>
            <li>
                <a href="{{ route('bookSerials.index') }}"><i class="fa fa-book"></i> Book serials</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->