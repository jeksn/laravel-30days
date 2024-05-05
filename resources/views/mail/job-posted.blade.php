<h2>
    {{ $job->title }}
</h2>
<p>
    Congrats! Your job has been posted. Check it out!
</p>
<p>
    <a href="{{ url('/job/' . $job->id) }}">View Your Job Listing</a>
</p>