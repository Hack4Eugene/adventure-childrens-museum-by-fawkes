module.exports = plop => {
  plop.setGenerator('page', {
		description: 'Create a page',
		prompts: [
      {
        type: 'input',
        name: 'name',
        message: 'Name',
      }
    ],
		actions: [
			{
				type: 'add',
				path: 'page-{{dashCase name}}.php',
				templateFile: 'plop-templates/page-php.hbs',
			},
			{
				type: 'add',
				path: 'templates/page-{{dashCase name}}.twig',
				templateFile: 'plop-templates/page-twig.hbs',
			},
			{
				type: 'add',
				path: 'styles/pages/_{{dashCase name}}.scss',
				templateFile: 'plop-templates/page-scss.hbs',
			},
		],
	});
};
