    <form method="POST" action="/">
      
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <br>
        <div class="mt-3">
        <button class="btn btn-primary"type="submit">Submit</button>
        </div>
    </form>
  

