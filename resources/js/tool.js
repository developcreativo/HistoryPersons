Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'history-persons',
      path: '/history-persons',
      component: require('./components/Tool'),
    },
  ])
})
