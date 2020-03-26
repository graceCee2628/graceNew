<div class="card">
    <center>
        <div class="card-header">
            <b>{{ Auth::user()->name }}</b>
            <br>
            <small>Guest</small>
        </div>

        <div class="card-body">
            <div class="item mb-3">
                <a href="/home">Dashboard</a>
            </div>

            <div class="item mb-3">
                <a href="/tickets/create">Create Ticket</a>
            </div>

            <div class="item mb-3">
                <a href="/my_ticket">My Tickets</a>
            </div>

        </div>
    </center>
</div>