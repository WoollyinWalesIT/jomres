
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
r
p
o
r
t
a
l
_
r
a
t
e
s

{

 
 
 
 
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
i
t
_
r
a
t
e
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
 
f
u
n
c
t
i
o
n
 
i
n
i
t
_
r
a
t
e
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
;

	
	

	
	
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
0
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
t
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
d
e
f
a
u
l
t
 
v
a
l
u
e
s
 
f
o
r
 
n
e
w
 
t
a
r
i
f
f
s

	
	
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
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

	
	
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
a
t
e
_
t
i
t
l
e
'
]
 
	
	
	
	
=
 
'
T
a
r
i
f
f
'
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
a
t
e
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
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
f
r
o
m
'
]
 
	
	
	
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
)
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
t
o
'
]
 
	
	
	
	
	
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
)
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
	
	
	
=
 
1
0
0
.
5
5
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
i
n
d
a
y
s
'
]
 
	
	
	
	
	
=
 
1
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
d
a
y
s
'
]
 
	
	
	
	
	
=
 
3
6
5
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
i
n
p
e
o
p
l
e
'
]
 
	
	
	
	
	
=
 
1
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
p
e
o
p
l
e
'
]
	
	
	
	
	
=
 
1
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
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
 
	
	
	
	
=
 
0
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
i
g
n
o
r
e
_
p
p
p
n
'
]
 
	
	
	
	
=
 
0
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
a
l
l
o
w
_
p
h
'
]
 
	
	
	
	
	
=
 
1
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
a
l
l
o
w
_
w
e
'
]
 
	
	
	
	
	
=
 
1
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
w
e
e
k
e
n
d
o
n
l
y
'
]
 
	
	
	
	
=
 
0
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
f
r
o
m
_
t
s
'
]
 
	
	
	
	
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
t
o
_
t
s
'
]
 
	
	
	
	
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
d
a
y
o
f
w
e
e
k
'
]
 
	
	
	
	
	
=
 
7
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
]
 
	
=
 
0
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
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
]
 
	
=
 
1
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
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
y
e
a
r
s
_
t
o
_
s
h
o
w
'
]
 
	
	
	
	
=
 
2
;

	
	

	
	
/
/
u
s
e
d
 
f
o
r
 
n
e
w
 
t
a
r
i
f
f
s
 
o
r
 
w
h
e
n
 
u
p
d
a
t
i
n
g
 
t
a
r
i
f
f
s

	
	
$
t
h
i
s
-
>
r
a
t
e
s
_
u
i
d
 
	
	
	
	
=
 
0
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
t
e
_
t
i
t
l
e
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
a
t
e
_
t
i
t
l
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
r
a
t
e
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
 
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
a
t
e
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
l
i
d
f
r
o
m
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
f
r
o
m
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
l
i
d
t
o
	
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
t
o
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
o
o
m
r
a
t
e
p
e
r
d
a
y
 
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
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
m
i
n
d
a
y
s
 
	
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
i
n
d
a
y
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
m
a
x
d
a
y
s
 
	
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
d
a
y
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
m
i
n
p
e
o
p
l
e
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
i
n
p
e
o
p
l
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
m
a
x
p
e
o
p
l
e
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
p
e
o
p
l
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
r
o
o
m
c
l
a
s
s
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
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
r
o
o
m
c
l
a
s
s
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
g
n
o
r
e
_
p
p
p
n
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
i
g
n
o
r
e
_
p
p
p
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
a
l
l
o
w
_
p
h
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
a
l
l
o
w
_
p
h
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
l
l
o
w
_
w
e
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
a
l
l
o
w
_
w
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
w
e
e
k
e
n
d
o
n
l
y
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
w
e
e
k
e
n
d
o
n
l
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
v
a
l
i
d
f
r
o
m
_
t
s
 
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
f
r
o
m
_
t
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
v
a
l
i
d
t
o
_
t
s
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
v
a
l
i
d
t
o
_
t
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
d
a
y
o
f
w
e
e
k
 
	
	
	
	
=
 
$
t
h
i
s
-
>
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
d
a
y
o
f
w
e
e
k
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
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
r
a
t
e
s
_
d
e
f
a
u
l
t
s
[
'
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
d
a
t
e
s
_
r
a
t
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
e
x
a
m
p
l
e
:
 
a
r
r
a
y
(
u
n
i
x
t
i
m
e
 
=
>
 
r
a
t
e
)
 
T
O
D
O
 
m
a
k
e
 
i
t
 
u
s
e
 
d
a
t
e
(
Y
m
d
)

	
	
$
t
h
i
s
-
>
d
a
t
e
s
_
m
i
n
d
a
y
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
e
x
a
m
p
l
e
:
 
a
r
r
a
y
(
u
n
i
x
t
i
m
e
 
=
>
 
m
i
n
d
a
y
s
)
 
T
O
D
O
 
m
a
k
e
 
i
t
 
u
s
e
 
d
a
t
e
(
Y
m
d
)

	
	
$
t
h
i
s
-
>
n
e
w
_
r
a
t
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

	
	
$
t
h
i
s
-
>
n
e
w
_
r
a
t
e
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
;

 
 
 
 
}

	

	
/
/
G
e
t
 
a
l
l
 
t
a
r
i
f
f
 
d
e
t
a
i
l
s
 
b
y
 
t
a
r
i
f
f
 
t
y
p
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
r
a
t
e
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
t
a
r
i
f
f
t
y
p
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
 
t
a
r
i
f
f
t
y
p
e
_
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
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
c
h
e
c
k
 
i
f
 
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
e
t
a
i
l
s
 
o
f
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
	
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
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

	
	
}

	
	

	
	
/
/
g
e
t
 
t
a
r
i
f
f
t
y
p
e
 
n
a
m
e
 
a
n
d
 
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
 
T
O
D
O
:
 
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
,
 
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
i
s
 
d
a
t
a
 
i
n
 
_
j
o
m
r
e
s
_
r
a
t
e
s
 
t
a
b
l
e
.
.

	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
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
t
a
r
i
f
f
t
y
p
e
_
i
d
.
"
 
A
N
D
 
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
 
t
a
r
i
f
f
t
y
p
e
 
n
a
m
e
 
a
n
d
 
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
 
d
o
n
`
t
 
e
x
i
s
t
,
 
s
o
 
t
a
r
i
f
f
s
 
a
r
e
 
n
o
t
 
c
o
n
f
i
g
u
r
e
d
 
p
r
o
p
e
r
l
y
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
t
a
r
i
f
f
s
 
a
g
a
i
n
.
'
)
;

	
	
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
r
a
t
e
_
t
i
t
l
e
 
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
r
a
t
e
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

	
	
	
}

	
	
}

	
	

	
	
/
/
g
e
t
 
t
h
e
 
r
a
t
e
s
 
u
i
d
s
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
_
i
d
 
T
O
D
O
:
 
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
 
a
n
d
 
m
o
v
e
 
x
r
e
f
 
t
o
 
_
j
o
m
r
e
s
_
r
a
t
e
s
 
t
a
b
l
e
 
i
n
 
t
a
r
i
f
f
t
y
p
e
_
i
d
 
c
o
l
u
m
n
.
.

	
	
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
t
a
r
i
f
f
_
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
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
t
a
r
i
f
f
t
y
p
e
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
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
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
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
d
o
e
s
n
`
t
 
h
a
v
e
 
a
n
y
 
t
a
r
i
f
f
_
i
d
,
 
s
o
 
t
a
r
i
f
f
s
 
a
r
e
 
n
o
t
 
c
o
n
f
i
g
u
r
e
d
 
p
r
o
p
e
r
l
y
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
t
a
r
i
f
f
s
 
a
g
a
i
n
.
'
)
;

	
	
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
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
t
a
r
i
f
f
_
i
d
]
[
'
r
a
t
e
s
_
u
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
t
a
r
i
f
f
_
i
d
;

	
	
	
}

	
	
}


	
	
/
/
g
e
t
 
t
h
e
 
t
a
r
i
f
f
 
d
e
t
a
i
l
s
 
f
o
r
 
a
l
l
 
r
a
t
e
s
 
u
i
d
s

 
 
 
 
 
 
 
 
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
r
a
t
e
s
_
u
i
d
`
,

	
	
	
	
	
`
r
a
t
e
_
t
i
t
l
e
`
,

	
	
	
	
	
`
r
a
t
e
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
v
a
l
i
d
f
r
o
m
`
,

	
	
	
	
	
`
v
a
l
i
d
t
o
`
,

	
	
	
	
	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
,

	
	
	
	
	
`
m
i
n
d
a
y
s
`
,

	
	
	
	
	
`
m
a
x
d
a
y
s
`
,
 

	
	
	
	
	
`
m
i
n
p
e
o
p
l
e
`
,
 

	
	
	
	
	
`
m
a
x
p
e
o
p
l
e
`
,
 

	
	
	
	
	
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
,

	
	
	
	
	
`
i
g
n
o
r
e
_
p
p
p
n
`
,

	
	
	
	
	
`
a
l
l
o
w
_
p
h
`
,

	
	
	
	
	
`
a
l
l
o
w
_
w
e
`
,

	
	
	
	
	
`
w
e
e
k
e
n
d
o
n
l
y
`
,

	
	
	
	
	
`
v
a
l
i
d
f
r
o
m
_
t
s
`
,

	
	
	
	
	
`
v
a
l
i
d
t
o
_
t
s
`
,

	
	
	
	
	
`
d
a
y
o
f
w
e
e
k
`
,

	
	
	
	
	
`
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
,

	
	
	
	
	
`
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
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
 
`
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
r
a
t
e
s
`
 

	
	
	
	
W
H
E
R
E
 
`
r
a
t
e
s
_
u
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
)
)
.
"
)
 

	
	
	
	
	
A
N
D
 
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
 
t
h
e
r
e
 
a
r
e
 
n
o
 
t
a
r
i
f
f
s
 
s
a
v
e
d
 
f
o
r
 
t
h
e
s
e
 
r
a
t
e
s
 
u
i
d
s
,
 
s
o
 
t
a
r
i
f
f
s
 
a
r
e
 
n
o
t
 
c
o
n
f
i
g
u
r
e
d
 
p
r
o
p
e
r
l
y
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
a
r
i
f
f
s
 
a
g
a
i
n
.
'
)
;

	
	
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
r
a
t
e
s
_
u
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
r
a
t
e
s
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
r
a
t
e
_
t
i
t
l
e
'
]
 
	
	
	
	
=
 
$
r
a
t
e
_
t
i
t
l
e
;
 
/
/
T
O
D
O

	
	
	
	
$
t
h
i
s
-
>
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
r
a
t
e
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
a
t
e
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
 
/
/
T
O
D
O

	
	
	
	
$
t
h
i
s
-
>
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
v
a
l
i
d
f
r
o
m
'
]
 
	
	
	
	
	
=
 
$
r
-
>
v
a
l
i
d
f
r
o
m
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
v
a
l
i
d
t
o
'
]
 
	
	
	
	
	
=
 
$
r
-
>
v
a
l
i
d
t
o
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
 
	
	
	
=
 
$
r
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
m
i
n
d
a
y
s
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
i
n
d
a
y
s
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
m
a
x
d
a
y
s
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
x
d
a
y
s
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
m
i
n
p
e
o
p
l
e
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
i
n
p
e
o
p
l
e
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
m
a
x
p
e
o
p
l
e
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
x
p
e
o
p
l
e
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
r
o
o
m
c
l
a
s
s
_
u
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
r
o
o
m
c
l
a
s
s
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
i
g
n
o
r
e
_
p
p
p
n
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
i
g
n
o
r
e
_
p
p
p
n
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
a
l
l
o
w
_
p
h
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
l
l
o
w
_
p
h
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
a
l
l
o
w
_
w
e
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
l
l
o
w
_
w
e
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
w
e
e
k
e
n
d
o
n
l
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
w
e
e
k
e
n
d
o
n
l
y
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
v
a
l
i
d
f
r
o
m
_
t
s
'
]
 
	
	
	
	
=
 
$
r
-
>
v
a
l
i
d
f
r
o
m
_
t
s
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
v
a
l
i
d
t
o
_
t
s
'
]
 
	
	
	
	
=
 
$
r
-
>
v
a
l
i
d
t
o
_
t
s
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
d
a
y
o
f
w
e
e
k
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
d
a
y
o
f
w
e
e
k
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
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
i
d
]
[
'
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
$
r
-
>
r
a
t
e
s
_
u
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
S
a
v
e
 
t
a
r
i
f
f

 
 
 
 
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
 
s
a
v
e
_
r
a
t
e
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
'
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
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
f
i
r
s
t
 
c
l
e
a
n
u
p
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
d
e
t
a
i
l
s
 
i
f
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
a
l
r
e
a
d
y
 
e
x
i
s
t
s

	
	
$
t
h
i
s
-
>
c
l
e
a
n
u
p
_
e
x
i
s
t
i
n
g
_
r
a
t
e
(
)
;

	
	

	
	
/
/
i
n
s
e
r
t
 
o
r
 
u
p
d
a
t
e
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
d
e
t
a
i
l
s

	
	
$
t
h
i
s
-
>
u
p
d
a
t
e
_
t
a
r
i
f
f
t
y
p
e
_
d
e
t
a
i
l
s
(
)
;

	
	

	
	
/
/
b
u
i
l
d
 
r
a
t
e
s
 
a
n
d
 
m
i
n
 
d
a
y
s
 
a
r
r
a
y
 
f
o
r
 
i
n
s
e
r
t
i
o
n

	
	
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
b
u
i
l
d
_
n
e
w
_
r
a
t
e
s
(
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
i
n
s
e
r
t
_
n
e
w
_
r
a
t
e
s
(
)
;

	
	

	
	
	
/
/
w
e
b
h
o
o
k
 
n
o
t
i
f
i
c
a
t
i
o
n

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
t
a
r
i
f
f
s
_
u
p
d
a
t
e
d
'
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
t
a
r
i
f
f
s
 
u
p
d
a
t
e
d
.
'
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
a
d
v
a
n
c
e
d
_
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
_
e
d
i
t
i
n
g
_
m
o
d
e
s
'
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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

	
	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
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
i
n
s
e
r
t
 
n
e
w
 
t
a
r
i
f
f
f
t
y
p
e
 
o
r
 
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
 
t
a
r
i
f
f
t
y
p
e
 
d
e
t
a
i
l
s
 
b
y
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
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
 
u
p
d
a
t
e
_
t
a
r
i
f
f
t
y
p
e
_
d
e
t
a
i
l
s
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
=
 
0
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
s
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
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

	
	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
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
r
a
t
e
_
t
i
t
l
e
.
"
'
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
r
a
t
e
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
.
"
'
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

	
	
	
	
	
	
	
	
)
"
;

	
	
	
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
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
;

	
	
	

	
	
	
i
f
 
(
!
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
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
 
U
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
n
e
w
 
t
a
r
i
f
f
t
y
p
e
 
d
e
t
a
i
l
s
.
'
)
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
s
 

	
	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
	
`
n
a
m
e
`
 
=
 
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
r
a
t
e
_
t
i
t
l
e
.
"
'
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
 
=
 
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
r
a
t
e
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
.
"
'
 

	
	
	
	
	
	
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
t
a
r
i
f
f
t
y
p
e
_
i
d
.
"
 

	
	
	
	
	
	
A
N
D
 

	
	
	
	
	
	
	
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
E
r
r
o
r
:
 
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
t
a
r
i
f
f
t
y
p
e
 
d
e
t
a
i
l
s
.
'
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

	

	
/
/
b
u
i
l
d
 
t
h
e
 
n
e
w
 
r
a
t
e
s
 
a
n
d
 
m
i
n
d
a
y
s
 
a
r
r
a
y
 
t
o
 
b
e
 
i
n
s
e
r
t
e
d

	
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
 
b
u
i
l
d
_
n
e
w
_
r
a
t
e
s
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
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
 
T
a
r
i
f
f
t
y
p
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
d
a
t
e
s
_
r
a
t
e
s
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
E
r
r
o
r
:
 
D
a
t
e
s
-
r
a
t
e
s
 
a
r
r
a
y
 
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
d
a
t
e
s
_
m
i
n
d
a
y
s
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
E
r
r
o
r
:
 
D
a
t
e
s
-
m
i
d
a
y
s
 
a
r
r
a
y
 
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

	
	

	
	
/
/
s
o
r
t
 
t
h
e
 
d
a
t
e
s
_
r
a
t
e
s
 
a
r
r
a
y
 
b
y
 
u
n
i
x
 
t
i
m
e
 
a
s
c
e
n
d
i
n
g

	
	
k
s
o
r
t
(
$
t
h
i
s
-
>
d
a
t
e
s
_
r
a
t
e
s
)
;

	
	

	
	
/
/
S
e
t
t
i
n
g
 
t
h
e
 
p
o
i
n
t
e
r
 
t
o
 
t
h
e
 
f
i
r
s
t
 
e
l
e
m
e
n
t
 
i
n
 
t
h
e
 
d
a
t
e
s
_
r
a
t
e
s
 
a
r
r
a
y
 
t
o
 
f
i
n
d
 
t
h
e
 
k
e
y
,
 
a
n
d
 
t
h
e
r
e
b
y
 
t
h
e
 
f
i
r
s
t
 
d
a
t
e
 
i
n
 
t
h
e
 
t
a
r
i
f
f
s

	
	
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
d
a
t
e
s
_
r
a
t
e
s
)
;

	
	

	
	
$
l
a
s
t
d
a
t
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
 
k
e
y
(
$
t
h
i
s
-
>
d
a
t
e
s
_
r
a
t
e
s
)
)
;

	
	
$
v
 
=
 
k
e
y
(
$
t
h
i
s
-
>
d
a
t
e
s
_
r
a
t
e
s
)
;

	
	
$
l
a
s
t
v
a
l
u
e
 
=
 
c
o
n
v
e
r
t
_
e
n
t
e
r
e
d
_
p
r
i
c
e
_
i
n
t
o
_
s
a
f
e
_
f
l
o
a
t
(
$
t
h
i
s
-
>
d
a
t
e
s
_
r
a
t
e
s
[
$
v
]
)
;

	
	
$
l
a
s
t
m
i
n
d
a
y
s
 
=
 
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
d
a
t
e
s
_
m
i
n
d
a
y
s
[
$
v
]
;

	
	
$
c
o
u
n
t
e
r
 
=
 
1
;


	
	
$
d
a
t
e
s
_
r
a
t
e
s
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
d
a
t
e
s
_
r
a
t
e
s
)
;

	
	

	
	
/
/
 
L
e
t
'
s
 
c
o
n
s
t
r
u
c
t
 
a
n
 
a
r
r
a
y
 
t
h
a
t
'
l
l
 
c
o
n
t
a
i
n
 
t
h
e
 
i
m
p
o
r
t
a
n
t
 
p
a
r
t
s
 
o
f
 
o
u
r
 
n
e
w
 
t
a
r
i
f
f
s

	
	
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
d
a
t
e
s
_
r
a
t
e
s
 
a
s
 
$
e
p
o
c
h
 
=
>
 
$
v
a
l
u
e
)
 
{

	
	
	
$
v
a
l
u
e
 
=
 
c
o
n
v
e
r
t
_
e
n
t
e
r
e
d
_
p
r
i
c
e
_
i
n
t
o
_
s
a
f
e
_
f
l
o
a
t
(
$
v
a
l
u
e
)
;


	
	
	
$
e
p
o
c
h
 
=
 
(
i
n
t
)
$
e
p
o
c
h
;

	
	
	

	
	
	
$
d
a
t
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
$
e
p
o
c
h
)
;

	
	
	

	
	
	
$
d
a
y
b
e
f
o
r
e
 
=
 
d
a
t
e
(
"
Y
/
m
/
d
"
,
s
t
r
t
o
t
i
m
e
(
"
-
1
 
d
a
y
"
,
 
$
e
p
o
c
h
)
)
;

	
	
	

	
	
	
$
m
i
n
d
a
y
s
_
v
a
l
u
e
 
=
 
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
d
a
t
e
s
_
m
i
n
d
a
y
s
[
$
e
p
o
c
h
]
;


	
	
	
i
f
 
(
$
v
a
l
u
e
 
!
=
 
$
l
a
s
t
v
a
l
u
e
 
|
|
 
$
m
i
n
d
a
y
s
_
v
a
l
u
e
 
!
=
 
$
l
a
s
t
m
i
n
d
a
y
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
n
e
w
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
s
t
a
r
t
'
=
>
$
l
a
s
t
d
a
t
e
,
 
'
e
n
d
'
=
>
$
d
a
y
b
e
f
o
r
e
,
 
'
v
a
l
u
e
'
=
>
$
l
a
s
t
v
a
l
u
e
,
 
'
m
i
n
d
a
y
s
'
=
>
$
l
a
s
t
m
i
n
d
a
y
s
)
;

	
	
	
	

	
	
	
	
$
l
a
s
t
d
a
t
e
 
=
 
$
d
a
t
e
;

	
	
	
	
$
l
a
s
t
v
a
l
u
e
 
=
 
$
v
a
l
u
e
;

	
	
	
	
$
l
a
s
t
m
i
n
d
a
y
s
 
=
 
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
d
a
t
e
s
_
m
i
n
d
a
y
s
[
$
e
p
o
c
h
]
;

	
	
	
	

	
	
	
	
i
f
 
(
$
c
o
u
n
t
e
r
 
=
=
 
$
d
a
t
e
s
_
r
a
t
e
s
_
c
o
u
n
t
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
n
e
w
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
s
t
a
r
t
'
=
>
$
l
a
s
t
d
a
t
e
,
 
'
e
n
d
'
=
>
$
d
a
t
e
,
 
'
v
a
l
u
e
'
=
>
$
l
a
s
t
v
a
l
u
e
,
 
'
m
i
n
d
a
y
s
'
=
>
$
l
a
s
t
m
i
n
d
a
y
s
)
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
i
f
 
(
$
c
o
u
n
t
e
r
 
=
=
 
$
d
a
t
e
s
_
r
a
t
e
s
_
c
o
u
n
t
)
 
{

	
	
	
	
$
t
h
i
s
-
>
n
e
w
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
s
t
a
r
t
'
=
>
$
l
a
s
t
d
a
t
e
,
 
'
e
n
d
'
=
>
$
d
a
t
e
,
 
'
v
a
l
u
e
'
=
>
$
l
a
s
t
v
a
l
u
e
,
 
'
m
i
n
d
a
y
s
'
=
>
$
l
a
s
t
m
i
n
d
a
y
s
)
;

	
	
	
	
$
l
a
s
t
d
a
t
e
 
=
 
$
d
a
t
e
;

	
	
	
	
$
l
a
s
t
v
a
l
u
e
 
=
 
$
v
a
l
u
e
;

	
	
	
	
$
l
a
s
t
m
i
n
d
a
y
s
 
=
 
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
d
a
t
e
s
_
m
i
n
d
a
y
s
[
$
e
p
o
c
h
]
;

	
	
	
}


	
	
	
$
c
o
u
n
t
e
r
+
+
;

	
	
}

	

	
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
t
h
i
s
-
>
n
e
w
_
r
a
t
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
n
s
e
r
t
 
n
e
w
 
r
a
t
e
s
/
t
a
r
i
f
f
s

	
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
n
s
e
r
t
_
n
e
w
_
r
a
t
e
s
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
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
 
T
a
r
i
f
f
t
y
p
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
n
e
w
_
r
a
t
e
s
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
E
r
r
o
r
:
 
N
e
w
 
r
a
t
e
s
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
w
e
`
l
l
 
d
o
 
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
a
t
e
,
 
b
e
c
a
u
s
e
 
w
e
`
l
l
 
n
e
e
d
 
t
h
e
 
r
a
t
e
 
u
i
d
s
 
f
o
r
 
e
a
c
h
 
t
o
 
u
p
d
a
t
e
 
t
h
e
 
t
a
r
i
f
t
y
p
e
 
r
a
t
e
 
x
r
e
f
 
t
a
b
l
e

	
	
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
n
e
w
_
r
a
t
e
s
 
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
v
a
l
i
d
f
r
o
m
_
t
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
r
[
'
s
t
a
r
t
'
]
)
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
l
i
d
t
o
_
t
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
r
[
'
e
n
d
'
]
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
r
a
t
e
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
r
a
t
e
_
t
i
t
l
e
`
,

	
	
	
	
	
	
	
`
r
a
t
e
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
v
a
l
i
d
f
r
o
m
`
,

	
	
	
	
	
	
	
`
v
a
l
i
d
t
o
`
,

	
	
	
	
	
	
	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
,

	
	
	
	
	
	
	
`
m
i
n
d
a
y
s
`
,

	
	
	
	
	
	
	
`
m
a
x
d
a
y
s
`
,

	
	
	
	
	
	
	
`
m
i
n
p
e
o
p
l
e
`
,

	
	
	
	
	
	
	
`
m
a
x
p
e
o
p
l
e
`
,

	
	
	
	
	
	
	
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
,

	
	
	
	
	
	
	
`
i
g
n
o
r
e
_
p
p
p
n
`
,

	
	
	
	
	
	
	
`
a
l
l
o
w
_
p
h
`
,

	
	
	
	
	
	
	
`
a
l
l
o
w
_
w
e
`
,

	
	
	
	
	
	
	
`
w
e
e
k
e
n
d
o
n
l
y
`
,

	
	
	
	
	
	
	
`
d
a
y
o
f
w
e
e
k
`
,

	
	
	
	
	
	
	
`
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
,

	
	
	
	
	
	
	
`
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
,

	
	
	
	
	
	
	
`
v
a
l
i
d
f
r
o
m
_
t
s
`
,

	
	
	
	
	
	
	
`
v
a
l
i
d
t
o
_
t
s
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

	
	
	
	
	
	
	
)

	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
(

	
	
	
	
	
	
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
r
a
t
e
_
t
i
t
l
e
.
"
'
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
r
a
t
e
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
.
"
'
,

	
	
	
	
	
	
'
"
.
$
r
[
'
s
t
a
r
t
'
]
.
"
'
,

	
	
	
	
	
	
'
"
.
$
r
[
'
e
n
d
'
]
.
"
'
,

	
	
	
	
	
	
"
.
$
r
[
'
v
a
l
u
e
'
]
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
r
[
'
m
i
n
d
a
y
s
'
]
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
m
a
x
d
a
y
s
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
m
i
n
p
e
o
p
l
e
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
m
a
x
p
e
o
p
l
e
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
r
o
o
m
c
l
a
s
s
_
u
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
i
g
n
o
r
e
_
p
p
p
n
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
l
l
o
w
_
p
h
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
l
l
o
w
_
w
e
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
w
e
e
k
e
n
d
o
n
l
y
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
d
a
y
o
f
w
e
e
k
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
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
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
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
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
v
a
l
i
d
f
r
o
m
_
t
s
.
"
'
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
v
a
l
i
d
t
o
_
t
s
.
"
'
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

	
	
	
	
	
	
)
"
;

	
	
	

	
	
	
$
n
e
w
_
r
a
t
e
_
u
i
d
 
=
 
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
;

	
	
	

	
	
	
i
f
 
(
!
$
n
e
w
_
r
a
t
e
_
u
i
d
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
 
t
a
r
i
f
f
 
f
a
i
l
e
d
.
'
)
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
n
e
w
_
r
a
t
e
s
_
u
i
d
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
n
e
w
_
r
a
t
e
_
u
i
d
;

	
	
	
}

	
	
}

	
	

	
	
/
/
u
p
d
a
t
e
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
x
r
e
f

	
	
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
u
p
d
a
t
e
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
(
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
u
p
d
a
t
e
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
x
r
e
f

	
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
 
u
p
d
a
t
e
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
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
 
T
a
r
i
f
f
t
y
p
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
n
e
w
_
r
a
t
e
s
_
u
i
d
s
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
E
r
r
o
r
:
 
N
e
w
 
r
a
t
e
s
 
u
i
d
s
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
v
a
l
u
e
s
 
=
 
'
'
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
t
h
i
s
-
>
n
e
w
_
r
a
t
e
s
_
u
i
d
s
 
a
s
 
$
r
)

	
	
	
{

	
	
	
$
v
a
l
u
e
s
 
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
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
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
r
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
r
o
o
m
c
l
a
s
s
_
u
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

	
	
	
	
	
	
)
,
"
;

	
	
	
}

	
	

	
	
$
v
a
l
u
e
s
 
=
 
r
t
r
i
m
(
$
v
a
l
u
e
s
,
 
'
,
'
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 

	
	
	
	
	
	
(

	
	
	
	
	
	
`
t
a
r
i
f
f
t
y
p
e
_
i
d
`
,

	
	
	
	
	
	
`
t
a
r
i
f
f
_
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
c
l
a
s
s
_
u
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

	
	
	
	
	
	
)
 

	
	
	
	
	
V
A
L
U
E
S
 
"
.

	
	
	
	
	
	
$
v
a
l
u
e
s
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
'
E
r
r
o
r
:
 
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
x
r
e
f
.
'
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
C
l
e
a
n
u
p
 
r
a
t
e
 
b
y
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
t
o
 
p
r
e
p
a
r
e
 
f
o
r
 
n
e
w
 
t
a
r
i
f
f
s
 
i
n
s
e
r
t
i
o
n

 
 
 
 
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
 
c
l
e
a
n
u
p
_
e
x
i
s
t
i
n
g
_
r
a
t
e
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
=
 
0
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
 
/
/
l
o
o
k
s
 
l
i
k
e
 
w
e
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
 
t
a
r
f
f
 
s
o
 
n
o
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
e
x
i
s
t
s
 
y
e
t

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
c
h
e
c
k
 
i
f
 
w
e
 
h
a
v
e
 
t
h
e
 
d
e
t
a
i
l
s
 
o
f
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
	
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
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
r
a
t
e
(
)
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
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

	
	
}

	
	

	
	
/
/
d
e
l
e
t
e
 
a
l
l
 
r
a
t
e
s
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
	
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
r
a
t
e
s
 
W
H
E
R
E
 
`
r
a
t
e
s
_
u
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
)
)
.
"
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
'
E
r
r
o
r
:
 
D
e
l
e
t
e
 
r
a
t
e
s
 
f
a
i
l
e
d
.
'
)
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
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
r
a
t
e
s
 
x
r
e
f

	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
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
 
t
a
r
i
f
f
_
i
d
 
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
)
)
.
"
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
'
E
r
r
o
r
:
 
D
e
l
e
t
e
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
x
r
e
f
 
f
a
i
l
e
d
.
'
)
;

	
	
}

	
	

	
	
/
/
r
e
s
e
t
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
a
r
r
a
y

	
	
$
t
h
i
s
-
>
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
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
 
r
a
t
e
 
b
y
 
t
a
r
i
f
f
t
y
p
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
 
d
e
l
e
t
e
_
r
a
t
e
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
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
 
T
a
r
i
f
f
t
y
p
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

	
	

	
	
/
/
c
h
e
c
k
 
i
f
 
w
e
 
h
a
v
e
 
t
h
e
 
d
e
t
a
i
l
s
 
o
f
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
	
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
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
r
a
t
e
(
)
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
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

	
	
}

	
	

	
	
/
/
d
e
l
e
t
e
 
a
l
l
 
r
a
t
e
s
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
	
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
r
a
t
e
s
 
W
H
E
R
E
 
`
r
a
t
e
s
_
u
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
)
)
.
"
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
'
E
r
r
o
r
:
 
D
e
l
e
t
e
 
r
a
t
e
s
 
f
a
i
l
e
d
.
'
)
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
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
r
a
t
e
s
 
x
r
e
f

	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
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
t
a
r
i
f
f
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
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
)
)
.
"
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
'
E
r
r
o
r
:
 
D
e
l
e
t
e
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
x
r
e
f
 
f
a
i
l
e
d
.
'
)
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
 
t
a
r
i
f
f
t
y
p
e

	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
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
t
a
r
i
f
f
t
y
p
e
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
'
E
r
r
o
r
:
 
D
e
l
e
t
e
 
t
a
r
i
f
f
t
y
p
e
 
f
a
i
l
e
d
.
'
)
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
 
c
u
s
t
o
m
 
t
e
x
t
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
f
o
r
 
a
l
l
 
l
a
n
g
u
a
g
e
s

	
	
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
c
u
s
t
o
m
_
t
e
x
t
 
W
H
E
R
E
 
`
c
o
n
s
t
a
n
t
`
 
=
 
'
_
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
_
T
A
R
I
F
F
_
T
I
T
L
E
_
T
A
R
I
F
F
T
Y
P
E
_
I
D
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
t
a
r
i
f
f
t
y
p
e
_
i
d
.
"
'
 
A
N
D
 
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
E
r
r
o
r
:
 
D
e
l
e
t
e
 
c
u
s
t
o
m
 
t
e
x
t
 
f
o
r
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
f
a
i
l
e
d
.
'
)
;

	
	
}

	
	

	
	
/
/
r
e
s
e
t
 
t
h
i
s
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
a
r
r
a
y

	
	
$
t
h
i
s
-
>
r
a
t
e
s
[
$
t
h
i
s
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
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
b
h
o
o
k
 
n
o
t
i
f
i
c
a
t
i
o
n

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
t
a
r
i
f
f
s
_
u
p
d
a
t
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
t
a
r
i
f
f
s
 
u
p
d
a
t
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
a
d
v
a
n
c
e
d
_
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
_
e
d
i
t
i
n
g
_
m
o
d
e
s
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
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
 
i
s
 
u
s
e
d
 
o
n
l
y
 
f
o
r
 
A
d
v
a
n
c
e
d
 
a
n
d
 
N
o
r
m
a
l
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
m
o
d
e
s
 
a
n
d
 
i
t
`
s
 
a
s
s
u
m
e
d
 
t
h
a
t
 
e
a
c
h
 
r
a
t
e
 
u
i
d
 
w
i
l
l
 
h
a
v
e
 
i
t
`
s
 
o
w
n
 
t
a
r
i
f
f
t
y
p
e
 
i
d

	
/
/
o
n
l
y
 
M
i
c
r
o
m
a
n
a
g
e
 
h
a
s
 
m
o
r
e
 
r
a
t
e
 
u
i
d
s
 
f
o
r
 
t
h
e
 
s
a
m
e
 
t
a
r
i
f
f
t
y
p
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
t
a
r
i
f
f
t
y
p
e
_
i
d
(
$
r
a
t
e
s
_
u
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
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
r
a
t
e
s
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
'
E
r
r
o
r
:
 
R
a
t
e
 
u
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


	
	
/
/
g
e
t
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
T
O
D
O
:
 
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
,
 
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
i
s
 
d
a
t
a
 
i
n
 
_
j
o
m
r
e
s
_
r
a
t
e
s
 
t
a
b
l
e
.
.

	
	
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
t
a
r
i
f
f
t
y
p
e
_
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
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
t
a
r
i
f
f
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
r
a
t
e
s
_
u
i
d
.
"
 
A
N
D
 
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
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
(
i
n
t
)
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
,
1
)
;


	
	
i
f
 
(
$
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
=
 
0
)
 
{

	
	
	
$
t
a
r
i
f
f
t
y
p
e
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
c
r
e
a
t
e
_
t
a
r
i
f
f
t
y
p
e
(
$
r
a
t
e
s
_
u
i
d
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
$
t
a
r
i
f
f
t
y
p
e
_
i
d
;

	
}

	

	
/
/
c
r
e
a
t
e
 
t
a
r
i
f
f
t
y
p
e
 
f
o
r
 
e
x
i
s
t
i
n
g
 
r
a
t
e
 
u
i
d
 
(
u
s
e
d
 
f
o
r
 
A
d
v
a
n
c
e
d
 
a
n
d
 
N
o
r
m
a
l
 
m
o
d
e
 
t
a
r
i
f
f
 
s
a
v
e
d
 
a
 
l
o
n
g
 
t
i
m
e
 
a
g
o
.
.
)

	
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
 
c
r
e
a
t
e
_
t
a
r
i
f
f
t
y
p
e
(
$
r
a
t
e
s
_
u
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
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
$
r
a
t
e
s
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
'
E
r
r
o
r
:
 
R
a
t
e
 
u
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

	
	

	
	
$
i
d
 
=
 
0
;

	
	

	
	
/
/
g
e
t
 
t
a
r
i
f
f
 
n
a
m
e
 
a
n
d
 
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
r
a
t
e
_
t
i
t
l
e
`
,
 
`
r
a
t
e
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
r
o
o
m
c
l
a
s
s
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
r
a
t
e
s
 
W
H
E
R
E
 
`
r
a
t
e
s
_
u
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
r
a
t
e
s
_
u
i
d
.
"
 
A
N
D
 
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
,
2
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
 
C
o
u
l
d
 
n
o
t
 
g
e
t
 
t
a
r
i
f
f
 
d
e
t
a
i
l
s
 
f
o
r
 
r
a
t
e
 
u
i
d
.
'
)
;

	
	
}


	
	
/
/
c
r
e
a
t
e
 
n
e
w
 
t
a
r
i
f
f
t
y
p
e

	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
s
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
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

	
	
	
	
	
	
	
)
 

	
	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
'
"
.
$
r
e
s
u
l
t
[
'
r
a
t
e
_
t
i
t
l
e
'
]
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
u
l
t
[
'
r
a
t
e
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
.
"
'
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

	
	
	
	
	
	
	
)
"
;

	
	
$
i
d
 
=
 
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
;

	
	

	
	
i
f
 
(
!
$
i
d
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
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
g
e
n
e
r
a
t
e
d
 
t
a
r
i
f
f
t
y
p
e
.
'
)
;

	
	
}

	
	

	
	
/
/
c
r
e
a
t
e
 
n
e
w
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
 
x
r
e
f

	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 

	
	
	
	
	
	
(

	
	
	
	
	
	
`
t
a
r
i
f
f
t
y
p
e
_
i
d
`
,

	
	
	
	
	
	
`
t
a
r
i
f
f
_
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
c
l
a
s
s
_
u
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
r
a
t
e
s
_
u
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
r
e
s
u
l
t
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
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
'
E
r
r
o
r
:
 
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
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
g
e
n
e
r
a
t
e
d
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
 
x
r
e
f
.
'
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
(
i
n
t
)
$
i
d
;

	
}

	

	
/
*

	
*
 
L
e
g
a
c
y
 
f
u
n
c
t
i
o
n
s

	
*
/

	
/
/
S
a
v
e
 
l
e
g
a
c
y
 
t
a
r
i
f
f
 
(
a
d
v
a
n
c
e
d
 
a
n
d
 
n
o
r
m
a
l
 
m
o
d
e
s
)

 
 
 
 
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
 
s
a
v
e
_
r
a
t
e
_
l
e
g
a
c
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
'
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
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
i
n
s
e
r
t
 
o
r
 
u
p
d
a
t
e
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
d
e
t
a
i
l
s

	
	
$
t
h
i
s
-
>
u
p
d
a
t
e
_
t
a
r
i
f
f
t
y
p
e
_
d
e
t
a
i
l
s
(
)
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
r
a
t
e
s
_
u
i
d
 
>
 
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
u
p
d
a
t
e
_
r
a
t
e
_
l
e
g
a
c
y
(
)
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
s
e
r
t
_
n
e
w
_
r
a
t
e
_
l
e
g
a
c
y
(
)
;

	
	
}

	

	
	
/
/
w
e
b
h
o
o
k
 
n
o
t
i
f
i
c
a
t
i
o
n

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
t
a
r
i
f
f
s
_
u
p
d
a
t
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
t
a
r
i
f
f
s
 
u
p
d
a
t
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
a
d
v
a
n
c
e
d
_
m
i
c
r
o
m
a
n
a
g
e
_
t
a
r
i
f
f
_
e
d
i
t
i
n
g
_
m
o
d
e
s
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
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
n
s
e
r
t
 
n
e
w
 
r
a
t
e
s
/
t
a
r
i
f
f
s
 
l
e
g
a
c
y
 
m
o
d
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
n
s
e
r
t
_
n
e
w
_
r
a
t
e
_
l
e
g
a
c
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
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
 
T
a
r
i
f
f
t
y
p
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
$
t
h
i
s
-
>
r
a
t
e
s
_
u
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
'
E
r
r
o
r
:
 
A
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
 
t
a
r
i
f
f
?
'
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
v
a
l
i
d
f
r
o
m
_
t
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
t
h
i
s
-
>
v
a
l
i
d
f
r
o
m
)
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
l
i
d
t
o
_
t
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
t
h
i
s
-
>
v
a
l
i
d
t
o
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
r
a
t
e
s
 

	
	
	
	
	
	
(

	
	
	
	
	
	
`
r
a
t
e
_
t
i
t
l
e
`
,

	
	
	
	
	
	
`
r
a
t
e
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
v
a
l
i
d
f
r
o
m
`
,

	
	
	
	
	
	
`
v
a
l
i
d
t
o
`
,

	
	
	
	
	
	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
,

	
	
	
	
	
	
`
m
i
n
d
a
y
s
`
,

	
	
	
	
	
	
`
m
a
x
d
a
y
s
`
,

	
	
	
	
	
	
`
m
i
n
p
e
o
p
l
e
`
,

	
	
	
	
	
	
`
m
a
x
p
e
o
p
l
e
`
,

	
	
	
	
	
	
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
,

	
	
	
	
	
	
`
i
g
n
o
r
e
_
p
p
p
n
`
,

	
	
	
	
	
	
`
a
l
l
o
w
_
p
h
`
,

	
	
	
	
	
	
`
a
l
l
o
w
_
w
e
`
,

	
	
	
	
	
	
`
w
e
e
k
e
n
d
o
n
l
y
`
,

	
	
	
	
	
	
`
d
a
y
o
f
w
e
e
k
`
,

	
	
	
	
	
	
`
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
,

	
	
	
	
	
	
`
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
,

	
	
	
	
	
	
`
v
a
l
i
d
f
r
o
m
_
t
s
`
,

	
	
	
	
	
	
`
v
a
l
i
d
t
o
_
t
s
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

	
	
	
	
	
	
)

	
	
	
	
	
V
A
L
U
E
S
 

	
	
	
	
	
	
(

	
	
	
	
	
	
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
r
a
t
e
_
t
i
t
l
e
.
"
'
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
r
a
t
e
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
.
"
'
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
v
a
l
i
d
f
r
o
m
.
"
'
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
v
a
l
i
d
t
o
.
"
'
,

	
	
	
	
	
	
"
.
$
t
h
i
s
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
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
m
i
n
d
a
y
s
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
m
a
x
d
a
y
s
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
m
i
n
p
e
o
p
l
e
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
m
a
x
p
e
o
p
l
e
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
r
o
o
m
c
l
a
s
s
_
u
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
i
g
n
o
r
e
_
p
p
p
n
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
l
l
o
w
_
p
h
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
l
l
o
w
_
w
e
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
w
e
e
k
e
n
d
o
n
l
y
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
d
a
y
o
f
w
e
e
k
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
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
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
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
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
v
a
l
i
d
f
r
o
m
_
t
s
.
"
'
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
v
a
l
i
d
t
o
_
t
s
.
"
'
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

	
	
	
	
	
	
)
"
;

	
	

	
	
$
n
e
w
_
r
a
t
e
_
u
i
d
 
=
 
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
;

	
	

	
	
i
f
 
(
!
$
n
e
w
_
r
a
t
e
_
u
i
d
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
 
t
a
r
i
f
f
 
f
a
i
l
e
d
.
'
)
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
n
e
w
_
r
a
t
e
s
_
u
i
d
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
n
e
w
_
r
a
t
e
_
u
i
d
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
 
t
h
e
 
t
a
r
i
f
f
t
y
p
e
 
r
a
t
e
s
 
x
r
e
f

	
	
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
u
p
d
a
t
e
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
(
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
u
p
d
a
t
e
 
r
a
t
e
s
/
t
a
r
i
f
f
s
 
l
e
g
a
c
y
 
m
o
d
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
 
u
p
d
a
t
e
_
r
a
t
e
_
l
e
g
a
c
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
'
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
.
'
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
t
a
r
i
f
f
t
y
p
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
 
T
a
r
i
f
f
t
y
p
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
$
t
h
i
s
-
>
r
a
t
e
s
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
'
E
r
r
o
r
:
 
A
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
 
u
p
d
a
t
r
i
n
g
 
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
 
t
a
r
i
f
f
?
'
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
v
a
l
i
d
f
r
o
m
_
t
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
t
h
i
s
-
>
v
a
l
i
d
f
r
o
m
)
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
l
i
d
t
o
_
t
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
/
"
,
"
-
"
,
$
t
h
i
s
-
>
v
a
l
i
d
t
o
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
r
a
t
e
s
 
S
E
T

	
	
	
	
	
	
`
r
a
t
e
_
t
i
t
l
e
`
 
=
 
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
r
a
t
e
_
t
i
t
l
e
.
"
'
,

	
	
	
	
	
	
`
r
a
t
e
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
 
=
 
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
r
a
t
e
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
.
"
'
,

	
	
	
	
	
	
`
v
a
l
i
d
f
r
o
m
`
 
=
 
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
v
a
l
i
d
f
r
o
m
.
"
'
,

	
	
	
	
	
	
`
v
a
l
i
d
t
o
`
 
=
 
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
v
a
l
i
d
t
o
.
"
'
,

	
	
	
	
	
	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
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
r
o
o
m
r
a
t
e
p
e
r
d
a
y
.
"
,

	
	
	
	
	
	
`
m
i
n
d
a
y
s
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
m
i
n
d
a
y
s
.
"
,

	
	
	
	
	
	
`
m
a
x
d
a
y
s
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
m
a
x
d
a
y
s
.
"
,

	
	
	
	
	
	
`
m
i
n
p
e
o
p
l
e
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
m
i
n
p
e
o
p
l
e
.
"
,

	
	
	
	
	
	
`
m
a
x
p
e
o
p
l
e
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
m
a
x
p
e
o
p
l
e
.
"
,

	
	
	
	
	
	
`
r
o
o
m
c
l
a
s
s
_
u
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
r
o
o
m
c
l
a
s
s
_
u
i
d
.
"
,

	
	
	
	
	
	
`
i
g
n
o
r
e
_
p
p
p
n
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
i
g
n
o
r
e
_
p
p
p
n
.
"
,

	
	
	
	
	
	
`
a
l
l
o
w
_
p
h
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
l
l
o
w
_
p
h
.
"
,

	
	
	
	
	
	
`
a
l
l
o
w
_
w
e
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
l
l
o
w
_
w
e
.
"
,

	
	
	
	
	
	
`
w
e
e
k
e
n
d
o
n
l
y
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
w
e
e
k
e
n
d
o
n
l
y
.
"
,

	
	
	
	
	
	
`
d
a
y
o
f
w
e
e
k
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
d
a
y
o
f
w
e
e
k
.
"
,

	
	
	
	
	
	
`
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
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
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
.
"
,

	
	
	
	
	
	
`
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
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
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
.
"
,

	
	
	
	
	
	
`
v
a
l
i
d
f
r
o
m
_
t
s
`
 
=
 
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
v
a
l
i
d
f
r
o
m
_
t
s
.
"
'
,

	
	
	
	
	
	
`
v
a
l
i
d
t
o
_
t
s
`
 
=
 
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
v
a
l
i
d
t
o
_
t
s
.
"
'

	
	
	
	
	
W
H
E
R
E

	
	
	
	
	
	
`
r
a
t
e
s
_
u
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
r
a
t
e
s
_
u
i
d
.
"

	
	
	
	
	
A
N
D

	
	
	
	
	
	
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
E
r
r
o
r
:
 
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
t
a
r
i
f
f
 
d
e
t
a
i
l
s
 
i
n
 
l
e
g
a
c
y
 
m
o
d
e
.
'
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

}

