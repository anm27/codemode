export default {
  name: 'blogs',
  type: 'document',
  title: 'Blog',
  fields: [
    {
      name: 'title',
      type: 'string',
      title: 'Blog Title',
      validation: (Rule) => Rule.required(),
    },
    {
      name: 'short_description',
      type: 'string',
      title: 'Category Description',
      validation: (Rule) => Rule.max(200),
    },
    {
      name: 'image',
      type: 'image',
      title: `Featured Image`,
    },
    {
      name: 'posted_on',
      type: 'date',
      title: `Posted On`,
    },
    //   {
    //     name: 'restaurants',
    //     type: 'array',
    //     title: `Restaurants`,
    //     of: [{type: 'reference', to: [{type: 'restaurant'}]}],
    //   },
  ],
}
