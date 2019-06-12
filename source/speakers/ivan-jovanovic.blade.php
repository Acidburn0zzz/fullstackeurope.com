@extends('_layouts.speaker', ['speaker' => $page->speakers['ivan-jovanovic']])

@section('workshop')
    <p>Testing JavaScript applications workshop will show you how to use modern testing tools to test JS full stack applications. It will cover frontend and backend side (<a href="https://reactjs.org">React</a> and <a href="https://nodejs.org/en/">NodeJS</a>) and will explain what are the best practices for testing. We will go through tools like <a href="https://jestjs.io">Jest</a>, <a href="https://mochajs.org">Mocha</a>, <a href="https://jasmine.github.io">Jasmine</a>, <a href="https://www.cypress.io">Cypress</a>, etc. Since React is the most popular framework, frontend tests will be testing React apps.</p>

    <p>This workshop will go through:</p>

    <ul>
        <li>Introduction to testing in general</li>
        <li>Examples of the apps that we will test</li>
        <li>Hands-on testing</li>
        <li>TDD approach</li>
        <li>Q&A session</li>
    </ul>

    <p>After this workshop, attendees will be able to efficiently test their JS applications, from UI frontend side to backend side. They will understand what are the best practices and the best tools for building a testing environment.</p>
@endsection

@section('bio')
    <p>Ivan is a senior software engineer, team lead, speaker, and mentor. His focus is on building scalable JavaScript applications and experimenting with new languages and frameworks. He is into functional and reactive programming. Leading teams and mentoring developers is his everyday duty.</p>

    <p>He loves to share knowledge on his tech blog and he's a regular speaker on international conferences.</p>
@endsection
