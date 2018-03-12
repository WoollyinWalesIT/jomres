
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

 
 
 
 
 
 
 
 
/
/
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
 
p
a
c
k
a
g
e
s
 
(
a
l
l
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
P
a
c
k
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


 
 
 
 
 
 
 
 
/
/
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
 
r
e
n
e
w
a
l
 
p
a
c
k
a
g
e
s
 
(
a
l
l
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
R
e
n
e
w
a
l
P
a
c
k
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


 
 
 
 
 
 
 
 
/
/
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
 
p
a
c
k
a
g
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
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
p
a
c
k
a
g
e
[
'
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
p
a
c
k
a
g
e
[
'
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
p
a
c
k
a
g
e
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
p
a
c
k
a
g
e
[
'
p
u
b
l
i
s
h
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
p
a
c
k
a
g
e
[
'
f
r
e
q
u
e
n
c
y
'
]
 
=
 
3
6
5
;
 
/
/
(
i
n
t
)
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
,
 
a
l
l
o
w
s
 
m
o
r
e
 
f
l
e
x
i
b
i
l
i
t
y
 
w
h
e
n
 
c
r
e
a
t
i
n
g
 
p
a
c
k
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
f
u
l
l
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
p
a
c
k
a
g
e
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
_
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
p
a
c
k
a
g
e
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
 
'
G
B
P
'
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
c
k
a
g
e
[
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
]
 
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
p
a
c
k
a
g
e
[
'
p
a
r
a
m
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
 
r
e
n
e
w
a
l
 
p
a
c
k
a
g
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
n
e
w
a
l
 
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
e
n
e
w
a
l
[
'
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
e
n
e
w
a
l
[
'
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
r
e
n
e
w
a
l
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
e
n
e
w
a
l
[
'
p
u
b
l
i
s
h
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
e
n
e
w
a
l
[
'
f
r
e
q
u
e
n
c
y
'
]
 
=
 
3
6
5
;
 
/
/
(
i
n
t
)
 
n
u
m
b
e
r
 
o
f
 
d
a
y
s
,
 
a
l
l
o
w
s
 
m
o
r
e
 
f
l
e
x
i
b
i
l
i
t
y
 
w
h
e
n
 
c
r
e
a
t
i
n
g
 
p
a
c
k
a
g
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
n
e
w
a
l
[
'
f
u
l
l
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
r
e
n
e
w
a
l
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
_
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
e
n
e
w
a
l
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
 
'
G
B
P
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
e
n
e
w
a
l
[
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
]
 
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
r
e
n
e
w
a
l
[
'
p
a
r
a
m
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
[
'
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
 
0
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
[
'
p
a
c
k
a
g
e
_
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
 
0
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
[
'
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
'
]
 
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
[
'
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
'
]
 
=
 
0
;


 
 
 
 
 
 
 
 
/
/
s
u
b
s
c
r
i
b
e
r
s

 
 
 
 
 
 
 
 
/
/
n
o
t
 
n
e
e
d
e
d
 
a
n
y
m
o
r
e
 
a
s
 
w
e
 
h
a
v
e
 
t
h
e
 
c
m
s
 
u
s
e
r
 
i
d
 
i
n
 
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
s
 
s
o
 
w
e
 
c
a
n
 
g
e
t
 
t
h
e
 
s
u
b
s
c
r
i
b
e
r
 
d
e
t
a
i
l
s
 
f
r
o
m
 
t
h
e
 
p
r
o
f
i
l
e
s
 
t
a
b
l
e
.


 
 
 
 
 
 
 
 
/
/
a
l
l
 
u
s
e
r
 
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
s
 
i
n
c
l
u
d
i
n
g
 
r
e
n
e
w
a
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
s
e
r
S
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
S
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
 
p
a
c
k
a
g
e
s
 
f
u
n
c
t
i
o
n
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
S
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
P
a
c
k
a
g
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
a
c
k
a
g
e
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
s
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
f
r
e
q
u
e
n
c
y
`
,

	
	
	
	
	
	
`
f
u
l
l
_
a
m
o
u
n
t
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
_
i
d
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
r
e
n
e
w
a
l
_
p
r
i
c
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
s
_
p
a
c
k
a
g
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
 
'
 
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
a
c
k
a
g
e
[
'
i
d
'
]
.
'
 

	
	
	
	
	
L
I
M
I
T
 
1
'
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
 
&
&
 
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
p
a
c
k
a
g
e
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
a
c
k
a
g
e
[
'
n
a
m
e
'
]
 
=
 
(
s
t
r
i
n
g
)
 
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
p
a
c
k
a
g
e
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
 
(
s
t
r
i
n
g
)
 
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
p
a
c
k
a
g
e
[
'
p
u
b
l
i
s
h
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
p
u
b
l
i
s
h
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
p
a
c
k
a
g
e
[
'
f
r
e
q
u
e
n
c
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
f
r
e
q
u
e
n
c
y
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
c
k
a
g
e
[
'
f
u
l
l
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
 
(
f
l
o
a
t
)
 
$
r
-
>
f
u
l
l
_
a
m
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
p
a
c
k
a
g
e
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
t
a
x
_
c
o
d
e
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
p
a
c
k
a
g
e
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
 
(
s
t
r
i
n
g
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
p
a
c
k
a
g
e
[
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
]
 
=
 
(
f
l
o
a
t
)
 
$
r
-
>
r
e
n
e
w
a
l
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
p
a
c
k
a
g
e
[
'
p
a
r
a
m
s
'
]
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
-
>
p
a
r
a
m
s
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
 
e
l
s
e
 
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
N
o
 
S
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
 
p
a
c
k
a
g
e
s
 
w
e
r
e
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
M
o
r
e
 
t
h
a
n
 
o
n
e
 
S
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
 
p
a
c
k
a
g
e
 
w
a
s
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
c
o
m
m
i
t
S
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
P
a
c
k
a
g
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
a
c
k
a
g
e
[
'
i
d
'
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
 
a
l
r
e
a
d
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
.
 
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
 
a
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
 
p
a
c
k
a
g
e
?
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
p
o
r
t
a
l
_
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
s
_
p
a
c
k
a
g
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
f
r
e
q
u
e
n
c
y
`
,

	
	
	
	
	
	
	
	
`
f
u
l
l
_
a
m
o
u
n
t
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
_
i
d
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
r
e
n
e
w
a
l
_
p
r
i
c
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
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
n
a
m
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
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
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
a
c
k
a
g
e
[
'
p
u
b
l
i
s
h
e
d
'
]
.
'
,

	
	
	
	
	
	
	
	
'
 
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
a
c
k
a
g
e
[
'
f
r
e
q
u
e
n
c
y
'
]
.
'
,

	
	
	
	
	
	
	
	
'
 
.
(
f
l
o
a
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
a
c
k
a
g
e
[
'
f
u
l
l
_
a
m
o
u
n
t
'
]
.
'
,

	
	
	
	
	
	
	
	
'
 
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
a
c
k
a
g
e
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
_
i
d
'
]
.
"
,

	
	
	
	
	
	
	
	
'
"
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
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
.
"
'
,

	
	
	
	
	
	
	
	
"
 
.
(
f
l
o
a
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
a
c
k
a
g
e
[
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
]
.
"
,

	
	
	
	
	
	
	
	
'
"
 
.
s
e
r
i
a
l
i
z
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
a
c
k
a
g
e
[
'
p
a
r
a
m
s
'
]
)
.
"
'

	
	
	
	
	
	
	
	
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
i
d
'
]
 
=
 
$
r
e
s
u
l
t
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
o
m
m
i
t
U
p
d
a
t
e
S
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
P
a
c
k
a
g
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
a
c
k
a
g
e
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
p
o
r
t
a
l
_
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
s
_
p
a
c
k
a
g
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
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
n
a
m
e
'
]
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
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
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
.
"
'
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
a
c
k
a
g
e
[
'
p
u
b
l
i
s
h
e
d
'
]
.
'
,

	
	
	
	
	
	
`
f
r
e
q
u
e
n
c
y
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
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
f
r
e
q
u
e
n
c
y
'
]
.
'
,

	
	
	
	
	
	
`
f
u
l
l
_
a
m
o
u
n
t
`
 
	
	
	
=
 
'
 
.
(
f
l
o
a
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
a
c
k
a
g
e
[
'
f
u
l
l
_
a
m
o
u
n
t
'
]
.
'
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
t
h
i
s
-
>
p
a
c
k
a
g
e
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
_
i
d
'
]
.
"
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
 
	
	
	
=
 
'
"
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
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
.
"
'
,

	
	
	
	
	
	
`
r
e
n
e
w
a
l
_
p
r
i
c
e
`
 
	
	
=
 
"
 
.
(
f
l
o
a
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
a
c
k
a
g
e
[
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
]
.
"
,

	
	
	
	
	
	
`
p
a
r
a
m
s
`
 
	
	
	
	
=
 
'
"
 
.
s
e
r
i
a
l
i
z
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
a
c
k
a
g
e
[
'
p
a
r
a
m
s
'
]
)
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
p
a
c
k
a
g
e
[
'
i
d
'
]
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

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
S
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
P
a
c
k
a
g
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
a
c
k
a
g
e
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
q
u
e
r
y
 
=
 
'
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
p
o
r
t
a
l
_
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
s
_
p
a
c
k
a
g
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
 
'
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
a
c
k
a
g
e
[
'
i
d
'
]
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

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
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
 
d
e
l
e
t
e
 
S
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
 
p
a
c
k
a
g
e
.
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
/
/
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
s
 
f
u
n
c
t
i
o
n
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
S
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
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
s
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
p
a
c
k
a
g
e
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
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
`
,

	
	
	
	
	
	
`
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
 
'
 
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
[
'
i
d
'
]
.
'
 

	
	
	
	
	
L
I
M
I
T
 
1
'
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
 
&
&
 
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
[
'
p
a
c
k
a
g
e
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
p
a
c
k
a
g
e
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
[
'
e
x
p
i
r
a
t
i
o
n
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
e
x
p
i
r
a
t
i
o
n
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
[
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
N
o
 
S
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
s
 
w
e
r
e
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
 
'
.
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
M
o
r
e
 
t
h
a
n
 
o
n
e
 
S
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
 
w
a
s
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
c
o
m
m
i
t
S
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
[
'
i
d
'
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
a
l
r
e
a
d
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
.
 
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
 
a
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
?
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
q
u
e
r
y
 
=
 
'
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
p
o
r
t
a
l
_
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
s

	
	
	
	
	
	
(

	
	
	
	
	
	
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
p
a
c
k
a
g
e
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
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
`
,

	
	
	
	
	
	
`
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
.
'
,

	
	
	
	
	
	
'
 
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
[
'
p
a
c
k
a
g
e
_
i
d
'
]
.
'
,

	
	
	
	
	
	
'
 
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
[
'
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
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
[
'
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
'
]
.
'

	
	
	
	
	
	
)
'
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
[
'
i
d
'
]
 
=
 
$
r
e
s
u
l
t
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
o
m
m
i
t
U
p
d
a
t
e
S
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
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
q
u
e
r
y
 
=
 
'
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
p
o
r
t
a
l
_
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
s
 
S
E
T

	
	
	
	
	
	
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
 
	
	
	
	
=
 
'
 
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
.
'
,

	
	
	
	
	
	
`
p
a
c
k
a
g
e
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
[
'
p
a
c
k
a
g
e
_
i
d
'
]
.
'
,

	
	
	
	
	
	
`
s
t
a
t
u
s
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
.
"
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
.
"
'
,

	
	
	
	
	
	
`
e
x
p
i
r
a
t
i
o
n
_
d
a
t
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
[
'
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
'
]
.
"
'
,

	
	
	
	
	
	
`
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
[
'
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
'
]
.
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
 
'
 
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
[
'
i
d
'
]
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

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
S
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
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
q
u
e
r
y
 
=
 
'
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
p
o
r
t
a
l
_
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
 
'
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
[
'
i
d
'
]
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

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
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
 
d
e
l
e
t
e
 
S
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
.
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
P
a
c
k
a
g
e
I
s
U
s
e
d
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
a
c
k
a
g
e
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
S
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
 
p
a
c
k
a
g
e
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
s
 
W
H
E
R
E
 
`
p
a
c
k
a
g
e
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
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
i
d
'
]
.
'
 
L
I
M
I
T
 
1
 
'
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
 
1
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
 
>
 
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
S
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
s
F
o
r
C
m
s
U
s
e
r
I
d
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
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
C
M
S
 
u
s
e
r
 
I
D
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
 

	
	
	
	
	
	
i
d
,
 

	
	
	
	
	
	
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

	
	
	
	
	
	
p
a
c
k
a
g
e
_
i
d
,
 

	
	
	
	
	
	
s
t
a
t
u
s
,
 

	
	
	
	
	
	
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
,
 

	
	
	
	
	
	
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
,
 

	
	
	
	
	
	
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
s
 

	
	
	
	
	
W
H
E
R
E
 
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
 
'
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
S
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
/
/
e
n
d
 
c
l
a
s
s

