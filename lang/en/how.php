<?php
return [
    'page_title'    => 'How I work',
    'heading'       => 'How I work',
    'intro'         => 'I like having a clear idea of what I\'m building before I touch the keyboard. Here\'s roughly how I go about a project.',

    'step_understand'       => 'Understand',
    'step_understand_desc'  => 'Before anything else I want to know what the actual problem is. I read through the requirements, ask questions if something is vague and make sure I know what a good result looks like.',

    'step_research'         => 'Research',
    'step_research_desc'    => 'I look at how others have solved similar problems, check the relevant docs and compare a couple of options before picking one.',

    'step_plan'             => 'Plan',
    'step_plan_desc'        => 'I sketch out the solution before writing any code. That means thinking about the database, the routes and what the API should look like.',

    'step_design'           => 'Design',
    'step_design_desc'      => 'I draw out the database with an ERD and map out the structure of the app. It\'s so much easier to catch mistakes on paper than in actual code.',

    'step_develop'          => 'Build',
    'step_develop_desc'     => 'I write the code. I try to keep it clean and follow whatever the project already has going on. If something feels wrong I stop and think about it.',

    'step_test'             => 'Test',
    'step_test_desc'        => 'I test what I build, both manually and with automated tests where it makes sense. Edge cases and error handling are things I pay close attention to.',

    'step_evaluate'         => 'Evaluate',
    'step_evaluate_desc'    => 'Once it\'s done I check it against the original goal. Did it actually solve the problem? What could be better?',

    'step_improve'          => 'Improve',
    'step_improve_desc'     => 'Based on what I find and any feedback I get, I go back and fix things. The first version is almost never the best one.',

    'examples_heading'      => 'In practice',
    'ex_requirements'       => 'Requirements',
    'ex_requirements_desc'  => 'I read them carefully, flag anything that seems vague and ask before building. Assumptions always come back to bite you.',
    'ex_erd'                => 'Database design',
    'ex_erd_desc'           => 'I draw an ERD before writing any migrations so I can see the whole picture first.',
    'ex_api'                => 'API design',
    'ex_api_desc'           => 'I think about the endpoints, naming and response format before writing any routes.',
    'ex_laravel'            => 'Laravel structure',
    'ex_laravel_desc'       => 'I follow Laravel conventions and keep logic where it belongs. Not everything goes in the controller.',
    'ex_testing'            => 'Testing',
    'ex_testing_desc'       => 'I write tests for the important parts and manually test edge cases I might have missed.',
    'ex_debugging'          => 'Debugging',
    'ex_debugging_desc'     => 'I reproduce the bug first, then narrow down where it\'s happening. I use logs, dd() and Postman for API stuff.',

    'ai_heading'    => 'Using AI',
    'ai_text'       => 'I use AI tools while coding, mostly for looking things up faster or generating boilerplate. I always read what it gives me though and make sure I actually understand it before using it.',
    'ai_note'       => 'I also check that whatever it generates actually fits the project, not just that it works on its own.',
];
