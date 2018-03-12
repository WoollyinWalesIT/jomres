
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
 
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
d
b
i
m
p
o
r
t

{

 
 
 
 
/
/
 
S
t
o
r
e
 
t
h
e
 
s
i
n
g
l
e
 
i
n
s
t
a
n
c
e
 
o
f
 
D
a
t
a
b
a
s
e

 
 
 
 
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
r
o
t
e
c
t
e
d
 
$
p
r
o
p
e
r
t
y
s
_
u
i
d
s
;

	

	
p
r
o
t
e
c
t
e
d
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
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
$
p
r
o
p
e
r
t
y
s
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
,
 
$
i
m
p
o
r
t
_
s
i
t
e
_
i
m
a
g
e
s
 
=
 
f
a
l
s
e
)

 
 
 
 
{

	
	
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
s
_
u
i
d
s
 
=
 
$
p
r
o
p
e
r
t
y
s
_
u
i
d
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
m
p
o
r
t
_
s
i
t
e
_
i
m
a
g
e
s
 
=
 
$
i
m
p
o
r
t
_
s
i
t
e
_
i
m
a
g
e
s
;
 
/
/
i
m
p
o
r
t
 
s
i
t
e
 
i
m
a
g
e
s
 
t
r
u
e
/
f
a
l
s
e

	
	

	
	
$
t
h
i
s
-
>
b
a
t
c
h
_
s
i
z
e
 
=
 
2
5
;
 
/
/
5
0
 
p
r
o
p
e
r
t
i
e
s
 
a
t
 
a
 
t
i
m
e
.
 
Y
o
u
 
c
a
n
 
i
n
c
r
e
a
s
e
/
d
e
c
r
e
a
s
e
 
t
h
i
s
 
d
e
p
e
n
d
i
n
g
 
o
n
 
w
h
a
t
 
y
o
u
 
s
e
r
v
e
r
 
c
a
n
 
h
a
n
d
l
e

	
	

	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

 
 
 
 
}


	
/
/
r
u
n
 
i
m
p
o
r
t
e
r

 
 
 
 
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
 
r
u
n
(
)

	
{

	
	
/
/
i
m
p
o
r
t
 
s
i
t
e
 
i
m
a
g
e
s

	
	
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
m
p
o
r
t
_
s
i
t
e
_
i
m
a
g
e
s
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
s
i
t
e
_
i
m
a
g
e
s
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
i
m
p
o
r
t
_
s
i
t
e
_
i
m
a
g
e
s
(
)
;

	
	
	
	

	
	
	
/
/
e
m
p
t
y
 
t
h
e
 
a
r
r
a
y
 
t
o
 
f
r
e
e
 
u
p
 
m
e
m
o
r
y

	
	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
 
=
 
a
r
r
a
y
(
)
;

	
	
}

	
	

	
	
/
/
i
m
p
o
r
t
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
s
 
i
n
 
b
a
t
c
h
e
s
 
o
f
 
$
t
h
i
s
-
>
b
a
t
c
h
_
s
i
z
e

	
	
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
p
r
o
p
e
r
t
y
s
_
u
i
d
s
)
)
 
{

	
	
	
$
i
 
=
 
0
;

	
	
	
$
p
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	

	
	
	
w
h
i
l
e
 
(
$
p
_
u
i
d
s
 
=
 
a
r
r
a
y
_
s
l
i
c
e
(
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
s
_
u
i
d
s
,
 
$
i
,
 
$
t
h
i
s
-
>
b
a
t
c
h
_
s
i
z
e
)
)
 
{

	
	
	
	
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
p
_
u
i
d
s
)
)
 
{

	
	
	
	
	
b
r
e
a
k
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
e
t
_
p
r
o
p
e
r
t
y
_
i
m
a
g
e
s
(
$
p
_
u
i
d
s
)
;

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
i
m
p
o
r
t
_
p
r
o
p
e
r
t
y
_
i
m
a
g
e
s
(
$
p
_
u
i
d
s
)
;

	
	
	
	

	
	
	
	
$
i
 
=
 
$
i
 
+
 
$
t
h
i
s
-
>
b
a
t
c
h
_
s
i
z
e
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

	

	
p
r
i
v
a
t
e
 
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
s
i
t
e
_
i
m
a
g
e
s
(
)

	
{

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
1
0
'
)
;

	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
'
1
1
0
1
0
'
]
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
o
u
r
c
e
_
t
y
p
e
s
)
)

	
	
	
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
o
u
r
c
e
_
t
y
p
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
$
k
)
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

	

	
p
r
i
v
a
t
e
 
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
p
r
o
p
e
r
t
y
_
i
m
a
g
e
s
(
$
p
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
)

	
{

	
	
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
p
_
u
i
d
s
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

	
	

	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
p
_
u
i
d
s
)
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
i
m
p
o
r
t
 
s
i
t
e
 
i
m
a
g
e
s
 
i
n
 
b
a
t
c
h
e
s
,
 
o
n
e
 
q
u
e
r
y
 
f
o
r
 
e
a
c
h
 
r
e
s
o
u
r
c
e
 
t
y
p
e

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
m
p
o
r
t
_
s
i
t
e
_
i
m
a
g
e
s
(
)

	
{

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
m
c
H
a
n
d
l
e
r
'
)
;

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
1
0
'
)
;

	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
'
1
1
0
1
0
'
]
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
o
u
r
c
e
_
t
y
p
e
s
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

	
	

	
	
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
 
=
 
f
a
l
s
e
;

	
	

	
	
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
o
u
r
c
e
_
t
y
p
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
k
]
)
 
&
&
 
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
k
]
)
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
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
i
m
a
g
e
s
 
(

	
	
	
	
	
	
	
	
	
	
	
	
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
r
e
s
o
u
r
c
e
_
t
y
p
e
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
i
d
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
f
i
l
e
n
a
m
e
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
v
e
r
s
i
o
n
`

	
	
	
	
	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
	
	
	
V
A
L
U
E
S
 
"
;

	
	
	
	

	
	
	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
[
$
k
]
[
'
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
'
]
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
k
]
 
a
s
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
>
 
$
r
e
s
o
u
r
c
e
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
r
e
s
o
u
r
c
e
 
a
s
 
$
r
 
=
>
 
$
v
e
r
s
i
o
n
s
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
v
e
r
s
i
o
n
s
 
a
s
 
$
v
e
r
s
i
o
n
 
=
>
 
$
p
a
t
h
)
 
{

	
	
	
	
	
	
	
	
$
q
u
e
r
y
 
.
=
 
"
(

	
	
	
	
	
	
	
	
	
	
	
0
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
k
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
r
e
s
o
u
r
c
e
_
i
d
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
b
a
s
e
n
a
m
e
(
$
p
a
t
h
)
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
v
e
r
s
i
o
n
.
"
'

	
	
	
	
	
	
	
	
	
	
	
)
,
"
;

	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
/
/
w
e
`
l
l
 
u
s
e
 
a
 
f
l
a
g
 
t
o
 
k
n
o
w
 
i
f
 
w
e
 
c
a
n
 
r
u
n
 
t
h
e
 
q
u
e
r
y
 
o
r
 
n
o
t
,
 
t
o
 
m
a
k
e
 
s
u
r
e
 
w
e
 
d
o
n
`
t
 
r
u
n
 
e
m
o
p
t
y
 
q
u
e
r
i
e
s
 
w
h
e
n
 
d
i
r
s
 
e
x
i
s
t
 
b
u
t
 
t
h
e
y
`
r
e
 
e
m
p
t
y

	
	
	
	
	
	
	
	
i
f
 
(
!
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
)
 
{

	
	
	
	
	
	
	
	
	
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}
 
e
l
s
e
 
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
k
]
 
a
s
 
$
f
i
l
e
n
a
m
e
s
 
=
>
 
$
f
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
f
 
a
s
 
$
v
e
r
s
i
o
n
 
=
>
 
$
p
a
t
h
)
 
{

	
	
	
	
	
	
	
$
q
u
e
r
y
 
.
=
 
"
(

	
	
	
	
	
	
	
	
	
	
0
,

	
	
	
	
	
	
	
	
	
	
'
"
.
$
k
.
"
'
,

	
	
	
	
	
	
	
	
	
	
'
0
'
,

	
	
	
	
	
	
	
	
	
	
'
"
.
b
a
s
e
n
a
m
e
(
$
p
a
t
h
)
.
"
'
,

	
	
	
	
	
	
	
	
	
	
'
"
.
$
v
e
r
s
i
o
n
.
"
'

	
	
	
	
	
	
	
	
	
	
)
,
"
;

	
	
	
	
	
	
	

	
	
	
	
	
	
	
/
/
w
e
`
l
l
 
u
s
e
 
a
 
f
l
a
g
 
t
o
 
k
n
o
w
 
i
f
 
w
e
 
c
a
n
 
r
u
n
 
t
h
e
 
q
u
e
r
y
 
o
r
 
n
o
t
,
 
t
o
 
m
a
k
e
 
s
u
r
e
 
w
e
 
d
o
n
`
t
 
r
u
n
 
e
m
o
p
t
y
 
q
u
e
r
i
e
s
 
w
h
e
n
 
d
i
r
s
 
e
x
i
s
t
 
b
u
t
 
t
h
e
y
`
r
e
 
e
m
p
t
y

	
	
	
	
	
	
	
i
f
 
(
!
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
)
 
{

	
	
	
	
	
	
	
	
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	

	
	
	
	
$
q
u
e
r
y
 
=
 
r
t
r
i
m
(
$
q
u
e
r
y
,
 
'
,
'
)
;


	
	
	
	
i
f
 
(
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
)
 
{

	
	
	
	
	
i
f
 
(
!
d
o
I
n
s
e
r
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
,
'
'
)
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
C
o
u
l
d
 
n
o
t
 
i
n
s
e
r
t
 
s
i
t
e
 
i
m
a
g
e
s
 
f
o
r
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
'
.
$
k
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
c
l
e
a
r
 
m
e
m
o
r
y

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
$
k
]
)
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

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
m
p
o
r
t
_
p
r
o
p
e
r
t
y
_
i
m
a
g
e
s
(
$
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
s
 
=
 
a
r
r
a
y
(
)
)

	
{

	
	
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
s
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

	
	

	
	
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
 
=
 
f
a
l
s
e
;


	
	
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
i
m
a
g
e
s
 
(

	
	
	
	
	
	
	
	
	
	
	
	
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
r
e
s
o
u
r
c
e
_
t
y
p
e
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
r
e
s
o
u
r
c
e
_
i
d
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
f
i
l
e
n
a
m
e
`
,
 

	
	
	
	
	
	
	
	
	
	
	
	
`
v
e
r
s
i
o
n
`

	
	
	
	
	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
	
	
	
V
A
L
U
E
S
 
"
;


	
	
f
o
r
e
a
c
h
 
(
$
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
s
 
a
s
 
$
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
)
 
{

	
	
	
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
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
]
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
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
]
 
a
s
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
>
 
$
r
e
s
o
u
r
c
e
_
i
d
s
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
r
e
s
o
u
r
c
e
_
i
d
s
 
a
s
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
>
 
$
f
i
l
e
s
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
f
i
l
e
s
 
a
s
 
$
f
 
=
>
 
$
v
e
r
s
i
o
n
s
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
v
e
r
s
i
o
n
s
 
a
s
 
$
v
e
r
s
i
o
n
 
=
>
 
$
p
a
t
h
)
 
{

	
	
	
	
	
	
	
	
$
q
u
e
r
y
 
.
=
 
"
(

	
	
	
	
	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
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
.
"
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
r
e
s
o
u
r
c
e
_
i
d
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
b
a
s
e
n
a
m
e
(
$
p
a
t
h
)
.
"
'
,

	
	
	
	
	
	
	
	
	
	
	
'
"
.
$
v
e
r
s
i
o
n
.
"
'

	
	
	
	
	
	
	
	
	
	
	
)
,
"
;

	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
/
/
w
e
`
l
l
 
u
s
e
 
a
 
f
l
a
g
 
t
o
 
k
n
o
w
 
i
f
 
w
e
 
c
a
n
 
r
u
n
 
t
h
e
 
q
u
e
r
y
 
o
r
 
n
o
t
,
 
t
o
 
m
a
k
e
 
s
u
r
e
 
w
e
 
d
o
n
`
t
 
r
u
n
 
e
m
o
p
t
y
 
q
u
e
r
i
e
s
 
w
h
e
n
 
d
i
r
s
 
e
x
i
s
t
 
b
u
t
 
t
h
e
y
`
r
e
 
e
m
p
t
y

	
	
	
	
	
	
	
	
i
f
 
(
!
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
)
 
{

	
	
	
	
	
	
	
	
	
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
r
e
m
o
v
e
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
u
i
d
 
f
r
o
m
 
a
r
r
a
y
 
t
o
 
f
r
e
e
 
u
p
 
m
e
m
o
r
y

	
	
	
	
u
n
s
e
t
(
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
$
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
]
)
;

	
	
	
}

	
	
}

	
	

	
	
$
q
u
e
r
y
 
=
 
r
t
r
i
m
(
$
q
u
e
r
y
,
 
'
,
'
)
;


	
	
i
f
 
(
$
a
t
_
l
e
a
s
t
_
o
n
e
_
i
m
a
g
e
_
e
x
i
s
t
s
)
 
{

	
	
	
i
f
 
(
!
d
o
I
n
s
e
r
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
,
'
'
)
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
C
o
u
l
d
 
n
o
t
 
i
n
s
e
r
t
 
s
i
t
e
 
i
m
a
g
e
s
 
f
o
r
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
'
.
$
k
)
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

