<h1>{{ poll.question }}</h1>
<ul>
{% for option in options %}
    <li>{{ option.name }}.{{ option.number_votes }} {{ link_to('poll/vote/'~option.id,'vote') }}</li>
{% endfor %}
</ul>
<p>
{{ link_to('poll/add/'~poll.id,'add') }}<br>
{{ link_to('poll/','Go back') }}
</p>
