<div class="container">
    
    <form action="<?= BASEURL; ?>/login/runLogin" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="emailLogin" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="passwordLogin" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Keep Login</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>