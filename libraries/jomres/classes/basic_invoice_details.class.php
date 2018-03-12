
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
b
a
s
i
c
_
i
n
v
o
i
c
e
_
d
e
t
a
i
l
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
_
n
o
t
e
 
=
 
'
0
 
-
 
u
n
p
a
i
d
 
,
 
1
 
-
 
p
a
i
d
 
,
 
2
 
-
 
c
a
n
c
e
l
l
e
d
 
,
 
3
 
-
 
p
e
n
d
i
n
g
 
'
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
a
t
h
e
r
D
a
t
a
(
$
i
n
v
o
i
c
e
_
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
i
n
v
o
i
c
e
_
i
d
,
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
i
n
v
o
i
c
e
(
$
i
n
v
o
i
c
e
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
l
i
n
e
_
i
t
e
m
s
(
$
i
n
v
o
i
c
e
_
i
d
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
c
m
s
_
u
s
e
r
_
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
s
t
a
t
u
s
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
r
a
i
s
e
d
_
d
a
t
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
d
u
e
_
d
a
t
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
p
a
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
s
u
b
s
c
r
i
p
t
i
o
n
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
i
n
i
t
_
t
o
t
a
l
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
c
u
r
r
e
n
c
y
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
i
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
c
o
n
t
r
a
c
t
_
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
i
s
_
c
o
m
m
i
s
s
i
o
n
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
s
 
=
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
;


 
 
 
 
 
 
 
 
/
/
G
r
a
n
d
 
t
o
t
a
l
 
i
s
 
t
h
e
 
s
u
m
 
o
f
 
a
l
l
 
l
i
n
e
 
i
t
e
m
s
 
(
p
o
s
i
t
i
v
e
 
o
r
 
n
e
g
a
t
i
v
e
)
,
 
e
x
c
e
p
t
 
p
a
y
m
e
n
t
s
 
l
i
n
e
 
i
t
e
m
s
.

 
 
 
 
 
 
 
 
/
/
A
m
o
u
n
t
 
a
l
r
e
a
d
y
 
p
a
i
d
 
i
s
 
t
h
e
 
s
u
m
 
o
f
 
t
h
e
 
p
a
y
m
e
n
t
 
l
i
n
e
 
i
t
e
m
s
.

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
e
x
_
t
a
x
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
i
n
c
_
t
a
x
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
t
a
x
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
m
o
u
n
t
_
a
l
r
e
a
d
y
_
p
a
i
d
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
a
l
a
n
c
e
 
=
 
0
.
0
0
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
s
 
a
s
 
$
l
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
i
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
e
x
_
t
a
x
 
+
=
 
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
i
n
c
_
t
a
x
 
+
=
 
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
a
m
o
u
n
t
 
=
 
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
 
]
 
-
 
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
i
n
c
_
t
a
x
 
+
=
 
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
a
m
o
u
n
t
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
t
a
x
 
+
=
 
$
t
a
x
_
a
m
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
m
o
u
n
t
_
a
l
r
e
a
d
y
_
p
a
i
d
 
+
=
 
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
a
l
a
n
c
e
 
=
 
$
t
h
i
s
-
>
g
r
a
n
d
_
t
o
t
a
l
_
i
n
c
_
t
a
x
 
+
 
$
t
h
i
s
-
>
a
m
o
u
n
t
_
a
l
r
e
a
d
y
_
p
a
i
d
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
t
h
e
 
i
n
v
o
i
c
e
 
d
e
t
a
i
l
s

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
i
n
v
o
i
c
e
(
$
i
n
v
o
i
c
e
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
i
d
`
,

	
	
	
	
	
	
`
c
m
s
_
u
s
e
r
_
i
d
`
,

	
	
	
	
	
	
`
s
t
a
t
u
s
`
,

	
	
	
	
	
	
`
r
a
i
s
e
d
_
d
a
t
e
`
,

	
	
	
	
	
	
`
d
u
e
_
d
a
t
e
`
,

	
	
	
	
	
	
`
p
a
i
d
`
,

	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
,

	
	
	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,

	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
`
,

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
i
d
`
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
`
i
s
_
c
o
m
m
i
s
s
i
o
n
`
,

	
	
	
	
	
	
`
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
`

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 

	
	
	
	
	
W
H
E
R
E
 
`
i
d
`
=
 
$
i
n
v
o
i
c
e
_
i
d
 

	
	
	
	
	
L
I
M
I
T
 
1
"
;


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
i
d
'
]
 
=
 
$
r
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
c
m
s
_
u
s
e
r
_
i
d
'
]
 
=
 
$
r
-
>
c
m
s
_
u
s
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
s
t
a
t
u
s
'
]
 
=
 
$
r
-
>
s
t
a
t
u
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
r
a
i
s
e
d
_
d
a
t
e
'
]
 
=
 
$
r
-
>
r
a
i
s
e
d
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
d
u
e
_
d
a
t
e
'
]
 
=
 
$
r
-
>
d
u
e
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
p
a
i
d
'
]
 
=
 
$
r
-
>
p
a
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
s
u
b
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
r
-
>
s
u
b
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
i
n
i
t
_
t
o
t
a
l
'
]
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
c
u
r
r
e
n
c
y
c
o
d
e
'
]
 
=
 
$
r
-
>
c
u
r
r
e
n
c
y
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
'
]
 
=
 
$
r
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
c
o
n
t
r
a
c
t
_
i
d
'
]
 
=
 
$
r
-
>
c
o
n
t
r
a
c
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
 
=
 
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
i
s
_
c
o
m
m
i
s
s
i
o
n
'
]
 
=
 
$
r
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
r
-
>
i
d
]
[
'
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
'
]
 
=
 
$
r
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
t
h
e
 
l
i
n
e
 
i
t
e
m
s
 
f
o
r
 
i
n
v
o
i
c
e
 
i
d

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
l
i
n
e
_
i
t
e
m
s
(
$
i
n
v
o
i
c
e
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 

	
	
	
	
	
	
`
i
d
`
,

	
	
	
	
	
	
`
n
a
m
e
`
,

	
	
	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
i
n
i
t
_
p
r
i
c
e
`
,

	
	
	
	
	
	
`
i
n
i
t
_
q
t
y
`
,

	
	
	
	
	
	
`
i
n
i
t
_
d
i
s
c
o
u
n
t
`
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
`
,

	
	
	
	
	
	
`
t
a
x
_
c
o
d
e
`
,

	
	
	
	
	
	
`
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
t
a
x
_
r
a
t
e
`
,

	
	
	
	
	
	
`
i
n
v
_
i
d
`
,

	
	
	
	
	
	
`
i
s
_
p
a
y
m
e
n
t
`
 
,

	
	
	
	
	
	
`
p
a
y
m
e
n
t
_
m
e
t
h
o
d
`
,

	
	
	
	
	
	
`
t
r
a
n
s
a
c
t
i
o
n
_
i
d
`
,

	
	
	
	
	
	
`
m
a
n
a
g
e
m
e
n
t
_
u
r
l
`

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 

	
	
	
	
	
W
H
E
R
E
 
`
i
n
v
_
i
d
`
 
=
 
'
 
.
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
d
'
 
]
 
=
 
$
r
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
n
a
m
e
'
 
]
 
=
 
$
r
-
>
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
 
=
 
$
r
-
>
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
n
i
t
_
p
r
i
c
e
'
 
]
 
=
 
$
r
-
>
i
n
i
t
_
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
n
i
t
_
q
t
y
'
 
]
 
=
 
$
r
-
>
i
n
i
t
_
q
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
r
-
>
i
n
i
t
_
d
i
s
c
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
t
a
x
_
c
o
d
e
'
 
]
 
=
 
$
r
-
>
t
a
x
_
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
 
]
 
=
 
$
r
-
>
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
t
a
x
_
r
a
t
e
'
 
]
 
=
 
$
r
-
>
t
a
x
_
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
n
v
_
i
d
'
 
]
 
=
 
$
r
-
>
i
n
v
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
 
=
 
$
r
-
>
i
s
_
p
a
y
m
e
n
t
;

	
	
	
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
 
=
 
$
r
-
>
p
a
y
m
e
n
t
_
m
e
t
h
o
d
;

	
	
	
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
]
 
=
 
$
r
-
>
t
r
a
n
s
a
c
t
i
o
n
_
i
d
;

	
	
	
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
 
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
]
 
=
 
$
r
-
>
m
a
n
a
g
e
m
e
n
t
_
u
r
l
;

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
'
]
 
&
&
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
 
>
 
0
 
&
&
 
$
r
-
>
i
s
_
p
a
y
m
e
n
t
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
'
t
a
x
_
a
m
o
u
n
t
'
]
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
 
-
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
[
$
i
n
v
o
i
c
e
_
i
d
]
[
'
l
i
n
e
i
t
e
m
s
'
]
[
 
$
r
-
>
i
d
 
]
[
'
t
a
x
_
a
m
o
u
n
t
'
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

}

