<div class="card">
    <center>
        <div class="card-header">
            <b>{{ Auth::user()->name }}</b>
            <br>
            <small>Admin</small>
        </div>

        <div class="card-body">
            <div class="item mb-3">
                <a href="/admin">Dashboard</a>
            </div>

            <div class="card-item mb-3">
                <a href="">My Pending Tickets</a>
            </div>

            <div class="card-item mb-3">
                <a href="">Treated Tickets</a>
            </div>
        </div>
    </center>
</div>