
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
 
i
s
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
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
 
D
o
n
'
t
 
n
e
e
d
 
t
o
 
r
u
n
 
t
h
i
s
 
a
g
a
i
n
 
i
f
 
t
h
e
 
t
a
b
l
e
'
s
 
a
l
r
e
a
d
y
 
p
o
p
u
l
a
t
e
d

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
 
u
s
e
r
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
 
L
I
M
I
T
 
2
'
;

$
e
x
i
s
t
i
n
g
_
u
s
e
r
s
 
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
e
x
i
s
t
i
n
g
_
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
;

}


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
 
u
s
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
u
s
e
r
_
u
s
e
r
g
r
o
u
p
_
m
a
p
 
W
H
E
R
E
 
g
r
o
u
p
_
i
d
 
=
 
8
 
L
I
M
I
T
 
1
'
;

$
a
d
m
i
n
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


$
a
d
m
i
n
_
u
s
e
r
 
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
_
u
s
e
r
s
_
a
d
m
i
n
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
a
d
m
i
n
_
u
s
e
r
_
i
d
)
;

$
a
d
m
i
n
_
u
s
e
r
 
=
 
$
a
d
m
i
n
_
u
s
e
r
[
 
$
a
d
m
i
n
_
u
s
e
r
_
i
d
 
]
;


/
/
e
c
h
o
 
"
M
a
k
i
n
g
 
<
i
>
"
 
.
 
$
a
d
m
i
n
_
u
s
e
r
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
 
.
 
"
<
/
i
>
 
a
 
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
<
b
r
>
"
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
$
a
d
m
i
n
_
u
s
e
r
[
 
'
i
d
'
 
]
.
"
,
9
0
,
1
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


/
*
 
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

 
 
 
 
e
c
h
o
 
"
I
n
s
e
r
t
e
d
 
"
 
.
 
$
a
d
m
i
n
_
u
s
e
r
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
 
.
 
"
 
a
s
 
m
a
n
a
g
e
r
<
b
r
>
"
;

e
l
s
e

 
 
 
 
e
c
h
o
 
"
C
o
u
l
d
 
n
o
t
 
c
r
e
a
t
e
 
"
 
.
 
$
a
d
m
i
n
_
u
s
e
r
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
 
.
 
"
 
a
s
 
m
a
n
a
g
e
r
<
b
r
>
"
;
 
*
/


/
/
 
L
o
o
k
i
n
g
 
t
o
 
s
e
e
 
i
f
 
J
o
m
r
e
s
 
i
s
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
 
i
n
 
J
o
o
m
l
a
.
 
I
f
 
i
t
 
i
s
,
 
w
e
'
l
l
 
s
i
m
p
l
y
 
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
 
a
s
 
t
h
e
r
e
'
s
 
n
o
t
h
i
n
g
 
e
l
s
e
 
t
o
 
d
o

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
e
l
e
m
e
n
t
`
 
F
R
O
M
 
#
_
_
e
x
t
e
n
s
i
o
n
s
 
W
H
E
R
E
 
`
e
l
e
m
e
n
t
`
 
=
 
'
c
o
m
_
j
o
m
r
e
s
'
 
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
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
=
=
 
1
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
e
x
t
e
n
s
i
o
n
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
t
y
p
e
`
,
`
e
l
e
m
e
n
t
`
,
`
f
o
l
d
e
r
`
,

	
`
c
l
i
e
n
t
_
i
d
`
,
`
e
n
a
b
l
e
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
`
,
`
p
r
o
t
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
n
i
f
e
s
t
_
c
a
c
h
e
`
,

	
`
p
a
r
a
m
s
`
,
`
n
a
m
e
s
p
a
c
e
`
,

	
`
c
h
e
c
k
e
d
_
o
u
t
`
,
`
c
h
e
c
k
e
d
_
o
u
t
_
t
i
m
e
`
,
`
o
r
d
e
r
i
n
g
`
,
`
s
t
a
t
e
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
J
o
m
r
e
s
'
,
'
c
o
m
p
o
n
e
n
t
'
,
'
c
o
m
_
j
o
m
r
e
s
'
,
'
'
,

	
'
1
'
,
'
1
'
,
'
1
'
,
'
0
'
,

	
'
{
\
"
n
a
m
e
\
"
:
\
"
J
o
m
r
e
s
\
"
,
\
"
t
y
p
e
\
"
:
\
"
c
o
m
p
o
n
e
n
t
\
"
,
\
"
c
r
e
a
t
i
o
n
D
a
t
e
\
"
:
\
"
2
0
0
5
-
0
3
-
1
8
\
"
,
\
"
a
u
t
h
o
r
\
"
:
\
"
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
\
"
,
\
"
c
o
p
y
r
i
g
h
t
\
"
:
\
"
(
C
)
 
2
0
0
5
 
-
 
2
0
1
1
 
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
.
 
A
l
l
 
r
i
g
h
t
s
 
r
e
s
e
r
v
e
d
.
\
t
\
"
,
\
"
a
u
t
h
o
r
E
m
a
i
l
\
"
:
\
"
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
\
"
,
\
"
a
u
t
h
o
r
U
r
l
\
"
:
\
"
w
w
w
.
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
\
"
,
\
"
v
e
r
s
i
o
n
\
"
:
\
"
7
\
"
,
\
"
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
\
"
:
\
"
J
o
m
r
e
s
\
"
,
\
"
g
r
o
u
p
\
"
:
\
"
\
"
}
'
,

	
'
{
}
'
,
'
J
o
o
m
l
a
\
C
o
m
p
o
n
e
n
t
\
J
o
m
r
e
s
'
,

	
'
0
'
,
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
,
'
0
'
,
'
0
'

	
)

	
"
;


$
c
o
m
p
o
n
e
n
t
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
$
c
o
m
p
o
n
e
n
t
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
 
t
i
t
l
e
 
F
R
O
M
 
#
_
_
m
e
n
u
 
W
H
E
R
E
 
`
l
i
n
k
`
 
=
 
'
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
'
 
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
 
m
a
x
(
r
g
t
)
 
F
R
O
M
 
#
_
_
m
e
n
u
'
;

 
 
 
 
 
 
 
 
$
h
i
g
h
e
s
t
 
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

 
 
 
 
 
 
 
 
$
l
f
t
 
=
 
$
h
i
g
h
e
s
t
 
+
 
1
;

 
 
 
 
 
 
 
 
$
r
g
t
 
=
 
$
h
i
g
h
e
s
t
 
+
 
2
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
m
e
n
u
 
(

	
	
	
	
`
m
e
n
u
t
y
p
e
`
,
`
t
i
t
l
e
`
,
`
a
l
i
a
s
`
,
`
n
o
t
e
`
,

	
	
	
	
`
p
a
t
h
`
,
`
l
i
n
k
`
,
`
t
y
p
e
`
,
`
p
u
b
l
i
s
h
e
d
`
,

	
	
	
	
`
p
a
r
e
n
t
_
i
d
`
,
`
l
e
v
e
l
`
,
`
c
o
m
p
o
n
e
n
t
_
i
d
`
,

	
	
	
	
`
c
h
e
c
k
e
d
_
o
u
t
`
,
`
c
h
e
c
k
e
d
_
o
u
t
_
t
i
m
e
`
,
`
b
r
o
w
s
e
r
N
a
v
`
,
`
a
c
c
e
s
s
`
,

	
	
	
	
`
i
m
g
`
,
`
t
e
m
p
l
a
t
e
_
s
t
y
l
e
_
i
d
`
,
`
p
a
r
a
m
s
`
,
`
l
f
t
`
,

	
	
	
	
`
r
g
t
`
,
`
h
o
m
e
`
,
`
l
a
n
g
u
a
g
e
`
,
`
c
l
i
e
n
t
_
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
m
a
i
n
'
,
'
J
o
m
r
e
s
'
,
'
J
o
m
r
e
s
'
,
'
J
o
m
r
e
s
'
,

	
	
	
	
'
'
,
'
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
'
,
'
c
o
m
p
o
n
e
n
t
'
,
1
,

	
	
	
	
1
,
1
,
"
 
.
$
c
o
m
p
o
n
e
n
t
_
i
d
.
"
,

	
	
	
	
0
,
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
,
0
,
1
,

	
	
	
	
'
c
l
a
s
s
:
c
o
m
p
o
n
e
n
t
'
,
0
,
'
'
,

	
	
	
	
"
 
.
$
l
f
t
.
'
,
'
.
$
r
g
t
.
"
,
0
,
'
*
'
,
1

	
	
	
	
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

 
 
 
 
}

}
 
e
l
s
e
 
{

 
 
 
 
e
c
h
o
 
'
U
n
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
m
a
i
n
 
J
o
m
r
e
s
 
a
d
m
i
n
 
m
e
n
u
 
o
p
t
i
o
n
<
b
r
>
'
;

}

