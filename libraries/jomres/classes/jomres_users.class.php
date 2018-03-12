
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


/
/
A
c
c
e
s
s
 
l
e
v
e
l
s

/
/
5
0
:
 
r
e
c
e
p
t
i
o
n
i
s
t

/
/
7
0
:
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

/
/
9
0
:
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r


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
u
s
e
r
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
_
i
n
i
t
(
)
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
 
_
i
n
i
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
d
	
	
	
	
	
	
=
 
0
;
	
	
	
	
	
	
/
/
(
i
n
t
)
 
m
a
n
a
g
e
r
 
i
d

	
	
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
 
0
;
	
	
	
	
	
	
/
/
(
i
n
t
)
 
c
m
s
 
u
s
e
r
 
i
d

	
	
$
t
h
i
s
-
>
u
s
e
r
n
a
m
e
	
	
	
	
	
=
 
'
'
;
	
	
	
	
	
	
/
/
(
s
t
r
i
n
g
)
 
c
m
s
 
u
s
e
r
 
u
s
e
r
n
a
m
e

	
	
$
t
h
i
s
-
>
a
c
c
e
s
s
_
l
e
v
e
l
	
	
	
	
=
 
0
;
	
	
	
	
	
	
/
/
(
i
n
t
)
 
a
c
c
e
s
s
 
l
e
v
e
l
:
 
5
0
:
r
e
c
e
p
t
i
o
n
i
s
t
,
 
7
0
:
m
a
n
a
g
e
r
,
 
9
0
:
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

	
	
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
t
p
r
o
p
e
r
t
y
	
	
	
=
 
0
;
	
	
	
	
	
	
/
/
(
i
n
t
)
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y

	
	
$
t
h
i
s
-
>
a
p
i
k
e
y
	
	
	
	
	
=
 
'
'
;
	
	
	
	
	
	
/
/
(
s
t
r
i
n
g
)
 
m
a
n
a
g
e
r
 
a
p
i
 
k
e
y

	
	
$
t
h
i
s
-
>
s
u
s
p
e
n
d
e
d
	
	
	
	
=
 
0
;
	
	
	
	
	
	
/
/
(
i
n
t
)
 
s
u
s
p
e
n
d
e
d
 
0
/
1

	
	
$
t
h
i
s
-
>
l
a
s
t
_
a
c
t
i
v
e
	
	
	
	
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;
	
/
/
(
d
a
t
e
t
i
m
e
)
 
Y
-
m
-
d
 
H
:
i
:
s

	
	

	
	
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
	
=
 
a
r
r
a
y
(
)
;
	
	
	
	
	
/
/
(
a
r
r
a
y
)
 
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
s
 
t
h
a
t
 
t
h
i
s
 
u
s
e
r
 
h
a
s
 
a
c
c
e
s
s
 
t
o

	
	

	
	
$
t
h
i
s
-
>
u
s
e
r
s
	
 
	
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
(
a
r
r
a
y
)
 
e
x
i
s
t
i
n
g
 
u
s
e
r
s

	
	

	
	
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
i
e
s
_
u
s
e
r
s
_
x
r
e
f
	
=
 
a
r
r
a
y
(
)
;
	
	
	
	
	
/
/
(
a
r
r
a
y
)
 
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
 
u
s
e
r
s
 
x
r
e
f

	
	

	
	
$
t
h
i
s
-
>
a
l
l
_
c
m
s
_
u
s
e
r
s
	
	
	
=
 
f
a
l
s
e
;
	
	
	
	
	
/
/
(
a
r
r
a
y
)
 
a
l
l
 
c
m
s
 
u
s
e
r
s
 
-
 
T
O
D
O
:
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
w
a
y

	
	
}


	
/
/
g
e
t
 
a
l
l
 
j
o
m
r
e
s
 
u
s
e
r
s

	
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
u
s
e
r
s
(
)

	
	
{

	
	
i
f
 
(
 
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
u
s
e
r
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
 
t
r
u
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
u
s
e
r
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

	
	

	
	
/
/
G
e
t
 
a
l
l
 
c
m
s
 
u
s
e
r
s
 
T
O
D
O
:
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
w
a
y
 
s
o
 
w
e
 
w
o
n
`
t
 
n
e
e
d
 
t
o
 
g
e
t
 
a
l
l
,
 
t
h
e
r
e
 
c
o
u
l
d
 
b
e
 
t
h
o
u
s
a
n
d
s

	
	
i
f
 
(
 
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
a
l
l
_
c
m
s
_
u
s
e
r
s
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
a
l
l
_
c
m
s
_
u
s
e
r
s
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
U
s
e
r
s
(
)
;

	
	
	
}

	
	

	
	
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
m
a
n
a
g
e
r
_
u
i
d
`
,
 
`
u
s
e
r
i
d
`
,
 
`
a
c
c
e
s
s
_
l
e
v
e
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
t
p
r
o
p
e
r
t
y
`
,
 
`
a
p
i
k
e
y
`
,
 
`
s
u
s
p
e
n
d
e
d
`
,
 
`
l
a
s
t
_
a
c
t
i
v
e
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
_
m
a
n
a
g
e
r
s
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
 
$
r
e
s
u
l
t
 
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
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
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
 
(
i
n
t
)
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
r
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
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
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
 
(
i
n
t
)
$
r
-
>
u
s
e
r
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
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
a
c
c
e
s
s
_
l
e
v
e
l
'
]
 
	
	
	
=
 
(
i
n
t
)
$
r
-
>
a
c
c
e
s
s
_
l
e
v
e
l
;

	
	
	
	
$
t
h
i
s
-
>
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
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
t
p
r
o
p
e
r
t
y
'
]
 
	
	
=
 
(
i
n
t
)
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
t
p
r
o
p
e
r
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
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
a
p
i
k
e
y
'
]
 
	
	
	
	
=
 
$
r
-
>
a
p
i
k
e
y
;

	
	
	
	
$
t
h
i
s
-
>
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
s
u
s
p
e
n
d
e
d
'
]
 
	
	
	
	
=
 
(
i
n
t
)
$
r
-
>
s
u
s
p
e
n
d
e
d
;

	
	
	
	
$
t
h
i
s
-
>
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
l
a
s
t
_
a
c
t
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
l
a
s
t
_
a
c
t
i
v
e
;


	
	
	
	
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
a
l
l
_
c
m
s
_
u
s
e
r
s
[
 
$
r
-
>
u
s
e
r
i
d
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
)
)

	
	
	
	
	
$
t
h
i
s
-
>
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
u
s
e
r
n
a
m
e
'
]
 
	
	
	
=
 
$
t
h
i
s
-
>
a
l
l
_
c
m
s
_
u
s
e
r
s
[
 
$
r
-
>
u
s
e
r
i
d
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

	
	
	
	
e
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
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
u
s
e
r
n
a
m
e
'
]
 
	
	
	
=
 
'
'
;

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
u
s
e
r
s
[
(
i
n
t
)
$
r
-
>
u
s
e
r
i
d
]
[
'
a
u
t
h
o
r
i
s
e
d
_
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
'
]
 
	
=
 
a
r
r
a
y
(
)
;
 
/
/
w
e
`
l
l
 
l
a
t
e
r
 
g
e
t
 
t
h
e
 
a
u
t
h
o
r
i
s
e
d
 
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
 
f
o
r
 
e
a
c
h
 
m
a
n
a
g
e
r
 
t
o
 
s
a
v
e
 
d
o
i
n
g
 
a
 
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

	
	
	
	
}

	
	
	
}

	
	

	
	
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
u
s
e
r
s
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
S
E
L
E
C
T
 
`
m
a
n
a
g
e
r
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
_
m
a
n
a
g
e
r
s
_
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
x
r
e
f
 
W
H
E
R
E
 
`
m
a
n
a
g
e
r
_
i
d
`
 
I
N
 
(
"
 
.
 
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
 
a
r
r
a
y
_
k
e
y
s
(
$
t
h
i
s
-
>
u
s
e
r
s
)
 
)
 
.
 
"
)
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
 
$
r
e
s
u
l
t
 
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
u
s
e
r
s
[
(
i
n
t
)
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
r
_
i
d
]
[
'
a
u
t
h
o
r
i
s
e
d
_
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
'
]
[
]
 
=
 
(
i
n
t
)
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
_
u
s
e
r
s
_
x
r
e
f
[
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
]
[
]
 
=
 
(
i
n
t
)
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
r
_
i
d
;

	
	
	
	
	
}

	
	
	
	
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

	

	
/
/
g
e
t
 
j
o
m
r
e
s
 
u
s
e
r
 
b
y
 
i
d

	
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
u
s
e
r
(
 
$
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
 
0
 
)

	
	
{

	
	
i
f
 
(
 
(
i
n
t
)
$
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
 
"
E
r
r
o
r
:
 
U
s
e
r
 
i
d
 
n
o
t
 
s
e
t
.
"
)
;

	
	
	
}

	
	

	
	
i
f
 
(
 
(
i
n
t
)
$
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
=
 
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
 
)
 
/
/
w
e
 
a
l
r
e
a
d
y
 
h
a
v
e
 
t
h
e
 
d
a
t
a
 
l
o
a
d
e
d

	
	
	
{

	
	
	
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

	
	

	
	
i
f
 
(
 
!
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
u
s
e
r
s
[
$
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
]
 
)
 
)

	
	
	
{

	
	
	
/
/
G
e
t
 
a
l
l
 
c
m
s
 
u
s
e
r
s
 
T
O
D
O
:
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
w
a
y
 
s
o
 
w
e
 
w
o
n
`
t
 
n
e
e
d
 
t
o
 
g
e
t
 
a
l
l
,
 
t
h
e
r
e
 
c
o
u
l
d
 
b
e
 
t
h
o
u
s
a
n
d
s

	
	
	
i
f
 
(
 
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
a
l
l
_
c
m
s
_
u
s
e
r
s
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
a
l
l
_
c
m
s
_
u
s
e
r
s
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
U
s
e
r
s
(
)
;

	
	
	
	
}

	
	
	

	
	
	
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
m
a
n
a
g
e
r
_
u
i
d
`
,
 
`
u
s
e
r
i
d
`
,
 
`
a
c
c
e
s
s
_
l
e
v
e
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
t
p
r
o
p
e
r
t
y
`
,
 
`
a
p
i
k
e
y
`
,
 
`
s
u
s
p
e
n
d
e
d
`
,
 
`
l
a
s
t
_
a
c
t
i
v
e
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
_
m
a
n
a
g
e
r
s
 
W
H
E
R
E
 
`
u
s
e
r
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
$
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
 
$
r
e
s
u
l
t
 
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
d
 
	
	
	
	
	
	
=
 
(
i
n
t
)
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
r
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
 
(
i
n
t
)
$
r
-
>
u
s
e
r
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
a
c
c
e
s
s
_
l
e
v
e
l
 
	
	
	
=
 
(
i
n
t
)
$
r
-
>
a
c
c
e
s
s
_
l
e
v
e
l
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
t
p
r
o
p
e
r
t
y
 
	
	
	
=
 
(
i
n
t
)
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
t
p
r
o
p
e
r
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
a
p
i
k
e
y
 
	
	
	
	
	
=
 
$
r
-
>
a
p
i
k
e
y
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
s
p
e
n
d
e
d
	
	
	
	
=
 
(
i
n
t
)
$
r
-
>
s
u
s
p
e
n
d
e
d
;

	
	
	
	
	
$
t
h
i
s
-
>
l
a
s
t
_
a
c
t
i
v
e
	
	
	
	
=
 
$
r
-
>
l
a
s
t
_
a
c
t
i
v
e
;


	
	
	
	
	
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
a
l
l
_
c
m
s
_
u
s
e
r
s
[
 
$
r
-
>
u
s
e
r
i
d
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
)
)

	
	
	
	
	
	
$
t
h
i
s
-
>
u
s
e
r
n
a
m
e
 
	
	
	
=
 
$
t
h
i
s
-
>
a
l
l
_
c
m
s
_
u
s
e
r
s
[
 
$
r
-
>
u
s
e
r
i
d
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

	
	
	
	
	
e
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
u
s
e
r
n
a
m
e
 
	
	
	
=
 
'
'
;

	
	
	
	
	

	
	
	
	
	
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
 
	
=
 
a
r
r
a
y
(
)
;
 
/
/
w
e
`
l
l
 
l
a
t
e
r
 
g
e
t
 
t
h
e
 
a
u
t
h
o
r
i
s
e
d
 
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
 
f
o
r
 
e
a
c
h
 
m
a
n
a
g
e
r
 
t
o
 
s
a
v
e
 
d
o
i
n
g
 
a
 
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

	
	
	
	
	
}

	
	
	
	

	
	
	
	
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
m
a
n
a
g
e
r
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
_
m
a
n
a
g
e
r
s
_
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
x
r
e
f
 
W
H
E
R
E
 
`
m
a
n
a
g
e
r
_
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
$
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
 
$
r
e
s
u
l
t
 
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
a
u
t
h
o
r
i
s
e
d
_
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
[
]
 
=
 
(
i
n
t
)
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

	
	
	
e
l
s
e

	
	
	
	
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
d
	
	
	
	
	
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
u
s
e
r
s
[
$
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
a
c
c
e
s
s
_
l
e
v
e
l
	
	
	
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
]
[
'
a
c
c
e
s
s
_
l
e
v
e
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
t
p
r
o
p
e
r
t
y
 
	
	
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
]
[
'
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
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
a
p
i
k
e
y
	
	
	
	
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
]
[
'
a
p
i
k
e
y
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
s
p
e
n
d
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
u
s
e
r
s
[
$
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
]
[
'
s
u
s
p
e
n
d
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
a
s
t
_
a
c
t
i
v
e
	
	
	
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
]
[
'
l
a
s
t
_
a
c
t
i
v
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
u
s
e
r
n
a
m
e
	
	
	
	
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
]
[
'
u
s
e
r
n
a
m
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
a
u
t
h
o
r
i
s
e
d
_
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
	
=
 
$
t
h
i
s
-
>
u
s
e
r
s
[
$
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
]
[
'
a
u
t
h
o
r
i
s
e
d
_
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
'
]
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


	
/
/
s
a
v
e
 
n
e
w
 
u
s
e
r

	
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
_
n
e
w
_
u
s
e
r
(
)

	
	
{

	
	
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
d
 
>
 
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
 
"
E
r
r
o
r
:
 
U
s
e
r
 
i
d
 
i
s
 
s
e
t
,
 
a
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
`
r
e
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
u
s
e
r
?
"
)
;

	
	
	
}

	
	

	
	
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
 
"
E
r
r
o
r
:
 
C
m
s
 
u
s
e
r
 
i
d
 
n
o
t
 
s
e
t
"
)
;

	
	
	
}

	
	

	
	
/
/
i
f
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
,
 
t
h
e
n
 
d
o
n
`
t
 
s
a
v
e
 
a
n
y
 
a
s
s
i
g
n
e
d
 
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
,
 
b
e
c
a
u
s
e
 
t
h
i
s
 
u
s
e
r
 
l
e
v
e
l
 
h
a
s
 
a
c
c
e
s
s
 
t
o
 
a
l
l

	
	
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
a
c
c
e
s
s
_
l
e
v
e
l
 
>
=
 
9
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
a
u
t
h
o
r
i
s
e
d
_
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
a
s
s
i
g
n
 
t
h
e
 
j
o
m
r
e
s
 
u
s
e
r
 
r
o
l
e
 
t
o
 
t
h
i
s
 
n
e
w
 
u
s
e
r

	
	
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
m
a
n
a
g
e
r
s
 

	
	
	
	
	
	
(

	
	
	
	
	
	
`
u
s
e
r
i
d
`
,

	
	
	
	
	
	
`
a
c
c
e
s
s
_
l
e
v
e
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
t
p
r
o
p
e
r
t
y
`
,

	
	
	
	
	
	
`
a
p
i
k
e
y
`

	
	
	
	
	
	
)

	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
(

	
	
	
	
	
	
"
 
.
 
(
i
n
t
)
 
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
 
.
 
"
,

	
	
	
	
	
	
"
 
.
 
(
i
n
t
)
 
$
t
h
i
s
-
>
a
c
c
e
s
s
_
l
e
v
e
l
 
.
 
"
,

	
	
	
	
	
	
"
 
.
 
(
i
n
t
)
 
r
e
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
a
u
t
h
o
r
i
s
e
d
_
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
)
 
.
 
"
,

	
	
	
	
	
	
'
"
 
.
 
$
t
h
i
s
-
>
a
p
i
k
e
y
 
.
 
"
'

	
	
	
	
	
	
)
"
;

	
	

	
	
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
 
"
E
r
r
o
r
:
 
U
s
e
r
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
"
)
;

	
	
	
}

	
	

	
	
/
/
u
p
d
a
t
e
 
u
s
e
r
`
s
 
a
s
s
i
g
n
e
d
 
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

	
	
u
p
d
a
t
e
M
a
n
a
g
e
r
I
d
T
o
P
r
o
p
e
r
t
y
X
r
e
f
T
a
b
l
e
(
 
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
,
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
u
p
d
a
t
e
 
e
x
i
s
t
i
n
g
 
u
s
e
r

	
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
_
u
p
d
a
t
e
_
u
s
e
r
(
)

	
	
{

	
	
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
 
"
E
r
r
o
r
:
 
U
s
e
r
 
i
d
 
n
o
t
 
s
e
t
"
)
;

	
	
	
}

	
	

	
	
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
 
"
E
r
r
o
r
:
 
C
m
s
 
u
s
e
r
 
i
d
 
n
o
t
 
s
e
t
"
)
;

	
	
	
}

	
	

	
	
/
/
i
f
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
,
 
t
h
e
n
 
d
o
n
`
t
 
s
a
v
e
 
a
n
y
 
a
s
s
i
g
n
e
d
 
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
,
 
b
e
c
a
u
s
e
 
t
h
i
s
 
u
s
e
r
 
l
e
v
e
l
 
h
a
s
 
a
c
c
e
s
s
 
t
o
 
a
l
l

	
	
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
a
c
c
e
s
s
_
l
e
v
e
l
 
>
=
 
9
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
a
u
t
h
o
r
i
s
e
d
_
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
u
p
d
a
t
e
 
u
s
e
r
 
r
o
l
e
 
d
e
t
a
i
l
s

	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
a
c
c
e
s
s
_
l
e
v
e
l
 
.
 
"
 
W
H
E
R
E
 
`
u
s
e
r
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
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
;

	
	

	
	
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
 
"
E
r
r
o
r
:
 
U
s
e
r
 
u
p
d
a
t
e
 
f
a
i
l
e
d
"
)
;

	
	
	
}

	
	

	
	
u
p
d
a
t
e
M
a
n
a
g
e
r
I
d
T
o
P
r
o
p
e
r
t
y
X
r
e
f
T
a
b
l
e
(
 
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
,
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
d
e
l
e
t
e
 
u
s
e
r

	
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
_
u
s
e
r
(
 
$
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
 
0
 
)

	
	
{

	
	
i
f
 
(
 
$
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
 
"
E
r
r
o
r
:
 
c
m
s
 
u
s
e
r
 
i
d
 
n
o
t
 
s
e
t
"
)
;

	
	
	
}


	
	
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
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
_
m
a
n
a
g
e
r
s
 
W
H
E
R
E
 
`
u
s
e
r
i
d
`
 
=
 
"
 
.
 
$
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
 
"
E
r
r
o
r
:
 
U
s
e
r
 
d
e
l
e
t
e
 
f
a
i
l
e
d
"
)
;

	
	
	
}

	
	

	
	
/
/
t
h
i
s
 
w
i
l
l
 
r
e
m
o
v
e
 
a
l
l
 
u
s
e
r
`
s
 
a
s
s
i
g
n
e
d
 
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

	
	
u
p
d
a
t
e
M
a
n
a
g
e
r
I
d
T
o
P
r
o
p
e
r
t
y
X
r
e
f
T
a
b
l
e
(
 
$
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
,
 
a
r
r
a
y
(
)
 
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
t
h
i
s
 
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
n
e
r
a
t
e
s
 
a
 
n
e
w
 
u
s
e
r
 
a
p
i
 
k
e
y
 
f
o
r
 
a
n
 
e
x
i
s
t
i
n
g
 
u
s
e
r
 
b
y
 
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
n
e
r
a
t
e
_
u
s
e
r
_
a
p
i
_
k
e
y
(
)

	
	
{

	
	
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
 
"
E
r
r
o
r
:
 
c
m
s
 
u
s
e
r
 
i
d
 
n
o
t
 
s
e
t
"
)
;

	
	
	
}

	
	

	
	
$
a
p
i
k
e
y
 
=
 
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
)
;

	
	
	

	
	
$
q
u
e
r
y
 
 
=
 
"
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
a
p
i
k
e
y
`
=
 
'
"
 
.
 
$
a
p
i
k
e
y
 
.
 
"
'
 
W
H
E
R
E
 
`
u
s
e
r
i
d
`
 
=
 
"
 
.
 
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
;

	
	

	
	
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
 
"
E
r
r
o
r
:
 
I
n
s
e
r
t
i
n
g
 
n
e
w
 
u
s
e
r
`
s
 
a
p
i
 
k
e
y
 
f
a
i
l
e
d
"
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

	

	
/
/
 
W
i
l
l
 
f
i
n
d
 
a
l
l
 
m
a
n
a
g
e
r
 
i
d
s
 
f
o
r
 
a
 
p
r
o
p
e
r
t
y
 
i
d
.
 
N
o
t
e
,
 
o
n
l
y
 
r
e
t
u
r
n
s
 
m
a
n
a
g
e
r
s
 
w
h
o
 
a
r
e
 
n
o
t
 
S
u
p
e
r
 
P
r
o
p
e
r
t
y
 
M
a
n
a
g
e
r
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
M
a
n
a
g
e
r
I
d
s
F
o
r
P
r
o
p
e
r
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
 
=
 
0
,
 
$
n
o
t
I
n
c
l
u
d
i
n
g
S
u
p
e
r
M
a
n
a
g
e
r
s
 
=
 
f
a
l
s
e
)

	
{

	
	
i
f
 
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
 
"
E
r
r
o
r
:
 
P
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
 
n
o
t
 
s
e
t
"
)
;

	
	
	
}


 
 
 
 
 
 
 
 
$
u
s
e
r
s
A
r
r
a
y
 
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
 
a
.
i
d
,
 
a
.
m
a
n
a
g
e
r
_
i
d
 
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
_
m
a
n
a
g
e
r
s
_
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
x
r
e
f
 
a
,
 
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
m
a
n
a
g
e
r
s
 
b
 
W
H
E
R
E
 
a
.
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
 
'
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
'
 
'
;


 
 
 
 
 
 
 
 
i
f
 
(
$
n
o
t
I
n
c
l
u
d
i
n
g
S
u
p
e
r
M
a
n
a
g
e
r
s
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
 
'
 
A
N
D
 
(
 
a
.
m
a
n
a
g
e
r
_
i
d
 
=
 
b
.
u
s
e
r
i
d
 
A
N
D
 
b
.
a
c
c
e
s
s
_
l
e
v
e
l
 
<
 
9
0
 
)
 
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
!
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
u
s
e
r
s
A
r
r
a
y
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
m
a
n
a
g
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
u
s
e
r
s
A
r
r
a
y
;

	
}

}

