<?php

declare(strict_types=1);

return [

    // Manage autoload migrations
    'autoload_migrations' => true,

    // Subscriptions Database Tables
    'tables' => [
        'plans' => 'subscription_plans',
        'plan_features' => 'subscription_plan_features',
        'plan_subscriptions' => 'subscription_plan_subscriptions',
        'plan_subscription_usage' => 'subscription_plan_subscription_usage',

    ],

    // Subscriptions Models
    'models' => [

        'plan' => \Rinvex\Subscriptions\Models\Plan::class,
        'plan_feature' => \Rinvex\Subscriptions\Models\PlanFeature::class,
        'plan_subscription' => \Rinvex\Subscriptions\Models\PlanSubscription::class,
        'plan_subscription_usage' => \Rinvex\Subscriptions\Models\PlanSubscriptionUsage::class,

    ],

];
