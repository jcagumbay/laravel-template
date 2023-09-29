# Laravel: Framework Agnostic Application Template

An adaptation on framework agnostic application template into Laravel.


## Why?

The purpose of this proposed template is for your application, specially your core domain, to be agnostic of what framework (or vanilla) you are currently using. I have three reasons for it:

1. **Portability**. If your team decides to change framework, there will be no need to touch core domain, specially your business logic. Your only concern is to implement adapters and framework specific plumbing.
2. **Easy upgrade**. If your code is deeply embedded into framework's structure, such as directory, etc, it might be tricky to make sure that your business code are not affected by the new structure/standards when there is a need for upgrade.
3. **Purity**. What I mean by this is that, your business code is free from framework boilerplate, such as annotations, etc. In Symfony, you can configure your entity with doctrine directly through annotations. I have nothing against it, but personally, I would like my aggregates and entities free from framework specific templates. Specially if the application is business logic heavy.

## Up and running

1. Run `composer install`
2. Run `./vendor/bin/sail up` from root directory
3. Load `http://localhost` and voilà ! (or `http://localhost/reservation` to see database integration though CQRS)

## Explanation

1. `src/Booking`. This is your `domain`. The goal is to navigate the `src` in terms of business terms instead of `Controller`, `Entity`, etc directories.
2. `Application` directory. All your commands and queries live here (CQRS implementation using Laravel's Queue). This is in accordance to Onion architecture. UI should only talk to Application.
3. `Domain` directory. Your business code lives here.
4. `Infrastructure` directory. This contains your adapters, doctrine mappings, etc.
