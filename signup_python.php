{% extends "base.html" %}
{% block content %}
<div class="left-panel">
<div class="form">
    <div class="message">{{ message }}</div>
    <div class="logo">{% include 'includes/logo.html' %}</div>
    <form method="POST" action="/signup">
        {{ form.csrf_token }}
        {{ form.user_name.label(class_="form-label") }}
        {{ form.user_name(class_="form-control", placeholder="John Doe") }}
        {% if form.user_name.errors %}<ul class="errors">{% for error in form.user_name.errors %}<li>{{ error }}</li>{% endfor %}</ul>{% endif %}

        {{ form.user_wallet_address.label(class_="form-label") }}
        {{ form.user_wallet_address(class_="form-control", placeholder="1F1tAaz5x1HU2rCNLbtMDqcw6o5GNn4xqX") }}
        {% if form.user_wallet_address.errors %}<ul class="errors">{% for error in form.user_wallet_address.errors %}<li>{{ error }}</li>{% endfor %}</ul>{% endif %}

        {{ form.user_email.label(class_="form-label") }}
        {{ form.user_email(class_="form-control", placeholder="john.doe@yahoo.com") }}
        {% if form.user_email.errors %}<ul class="errors">{% for error in form.user_email.errors %}<li>{{ error }}</li>{% endfor %}</ul>{% endif %}

        {{ form.user_passwd.label(class_="form-label") }}
        {{ form.user_passwd(class_="form-control", placeholder="Password") }}
        {% if form.user_passwd.errors %}<ul class="errors">{% for error in form.user_passwd.errors %}<li>{{ error }}</li>{% endfor %}</ul>{% endif %}

        {{ form.user_cfm_passwd.label(class_="form-label") }}
        {{ form.user_cfm_passwd(class_="form-control", placeholder="Confirm Password") }}
        {% if form.user_cfm_passwd.errors %}<ul class="errors">{% for error in form.user_cfm_passwd.errors %}<li>{{ error }}</li>{% endfor %}</ul>{% endif %}

        {{ form.user_submit_btn(class_="form-button") }}

    </form>
</div>
</div>
<div class="right-panel">
    <img src="{{ url_for('static', filename='images/setting.png') }}" alt="Logo" />
</div>
{% endblock %}
