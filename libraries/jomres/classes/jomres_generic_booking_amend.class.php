
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
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
a
m
e
n
d

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
 
/
/
 
1
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
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
u
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
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
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
_
u
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
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
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
o
o
m
_
u
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
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
 
=
 
'
'
;
 
/
/
 
(
d
a
t
e
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
 
=
 
'
'
;
 
/
/
 
(
d
a
t
e
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
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
b
o
o
k
e
d
_
d
a
t
e
 
=
 
'
'
;
 
/
/
 
(
d
a
t
e
)
 
l
a
s
t
 
d
a
t
e
 
t
o
 
b
e
 
m
a
r
k
e
d
 
a
s
 
b
o
o
k
e
d
 
f
o
r
 
t
h
i
s
 
c
o
n
t
r
a
c
t

 
 
 
 
 
 
 
 
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
_
r
a
n
g
e
_
a
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
 
/
/
(
a
r
r
a
y
)
 
b
o
o
k
e
d
 
d
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
c
o
n
t
r
a
c
t
_
b
o
o
k
e
d
_
d
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
(
a
r
r
a
y
)
 
o
r
i
g
i
n
a
l
l
y
 
b
o
o
k
e
d
 
d
a
t
e
s
 
i
n
 
d
b
 
f
o
r
 
t
h
i
s
 
c
o
n
t
r
a
c
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
o
t
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
 
o
p
t
i
o
n
a
l
 
b
o
o
k
i
n
g
 
n
o
t
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
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
r
r
a
y
 
o
f
 
t
h
i
s
 
c
o
n
t
r
a
c
t
 
r
o
o
m
 
u
i
d
s

 
 
 
 
 
 
 
 
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
c
h
a
n
g
e
d
 
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
b
o
o
l
)
 
d
a
t
e
s
 
a
l
s
o
 
c
h
a
n
g
e
d
 
f
o
r
 
t
h
i
s
 
b
o
o
k
i
n
g
,
 
o
r
 
i
t
`
s
 
j
u
s
t
 
a
 
r
o
o
m
 
s
w
i
t
c
h
.
 
B
y
 
d
e
f
a
u
l
t
 
i
t
`
s
 
j
u
s
t
 
a
 
r
o
o
m
 
s
w
i
t
c
h

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
v
e
n
t
_
r
e
s
i
z
e
d
 
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
b
o
o
l
)
 
e
v
e
n
t
 
w
a
s
 
r
e
s
i
z
e
d
 
o
r
 
n
o
t
.
 
I
f
 
i
t
 
w
a
s
 
r
e
s
i
z
e
d
,
 
w
e
 
c
h
e
c
k
 
a
v
a
i
l
a
b
i
l
i
t
y
 
b
y
 
e
x
c
l
u
d
i
n
g
 
t
h
e
 
b
o
o
k
e
d
 
r
o
o
m
s
 
u
i
d
s


 
 
 
 
 
 
 
 
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
 
a
m
e
n
d
_
b
o
o
k
i
n
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
m
e
n
d
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
t
r
y
 
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
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
S
u
c
c
e
s
s
f
u
l
 
=
 
$
t
h
i
s
-
>
d
o
_
a
m
e
n
d
_
b
o
o
k
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
a
m
e
n
d
S
u
c
c
e
s
s
f
u
l
;

 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
v
a
l
i
d
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
c
o
n
t
r
a
c
t
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
 
c
o
n
t
r
a
c
t
_
u
i
d
 
i
s
 
n
o
t
 
v
a
l
i
d
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
o
o
m
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
 
r
o
o
m
_
u
i
d
 
i
s
 
n
o
t
 
v
a
l
i
d
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
n
e
w
_
r
o
o
m
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
 
n
e
w
_
r
o
o
m
_
u
i
d
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
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
 
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
)
 
&
&
 
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
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
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
 
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
l
e
t
`
s
 
s
e
t
 
t
h
e
 
d
a
t
e
 
r
a
n
g
e
 
a
r
r
a
y
 
f
o
r
 
t
h
e
 
n
e
w
 
c
o
n
t
r
a
c
t
 
d
a
t
e
s

 
 
 
 
 
 
 
 
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
_
r
a
n
g
e
_
a
r
r
a
y
 
=
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
,
 
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
b
o
o
k
e
d
_
d
a
t
e
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
 
`
r
o
o
m
_
b
o
o
k
i
n
g
s
_
u
i
d
`
,
`
d
a
t
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
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
`
r
o
o
m
_
u
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
r
o
o
m
_
u
i
d
.
'
 
A
N
D
 
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
u
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 
O
R
D
E
R
 
B
Y
 
`
d
a
t
e
`
 
A
S
C
 
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
b
o
o
k
e
d
_
d
a
t
e
s
[
]
 
=
 
$
r
-
>
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
a
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
c
o
n
t
r
a
c
t
_
b
o
o
k
e
d
_
d
a
t
e
s
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
_
r
a
n
g
e
_
a
r
r
a
y
)
 
!
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
c
o
n
t
r
a
c
t
_
b
o
o
k
e
d
_
d
a
t
e
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
e
v
e
n
t
_
r
e
s
i
z
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
r
s
t
_
d
a
y
 
=
 
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
c
o
n
t
r
a
c
t
_
b
o
o
k
e
d
_
d
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
_
d
a
y
 
=
 
e
n
d
(
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
b
o
o
k
e
d
_
d
a
t
e
s
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
a
r
r
i
v
a
l
 
=
=
 
$
f
i
r
s
t
_
d
a
y
 
&
&
 
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
b
o
o
k
e
d
_
d
a
t
e
 
=
=
 
$
l
a
s
t
_
d
a
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
a
t
e
s
 
n
o
t
 
c
h
a
n
g
e
d
,
 
s
o
 
t
h
i
s
 
i
s
 
j
u
s
t
 
a
 
r
o
o
m
 
s
w
i
t
c
h

	
	
	
	
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
c
h
a
n
g
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
a
t
e
s
 
c
h
a
n
g
e
d
,
 
s
o
 
w
e
 
n
e
e
d
 
t
o
 
g
o
 
f
u
r
t
h
e
r
 
a
n
d
 
c
h
e
c
k
 
a
v
a
i
l
a
b
i
l
i
t
y
 
f
o
r
 
a
l
l
 
r
o
o
m
s
 
i
n
 
t
h
i
s
 
c
o
n
t
r
a
c
t
_
u
i
d
.
 
W
e
 
c
a
n
`
t
 
a
m
e
n
d
 
j
u
s
t
 
o
n
e
 
r
o
o
m
 
a
n
d
 
c
h
a
n
g
e
 
i
t
`
s
 
d
a
t
e
s
,
 
s
i
n
c
e
 
t
h
e
r
e
 
m
a
y
b
e
 
b
e
 
m
o
r
e
 
r
o
o
m
s
 
i
n
 
t
h
i
s
 
c
o
n
t
r
a
c
t
,
 
s
o
 
a
l
l
 
h
a
v
e
 
t
o
 
b
e
 
m
o
v
e
d
 
t
o
 
t
h
e
 
n
e
w
 
d
a
t
e
s
.
 
T
h
i
s
 
d
o
e
s
n
`
t
 
a
l
s
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
 
p
r
i
c
e
.
 
M
a
y
b
e
 
w
i
t
h
 
t
h
e
 
n
e
w
 
b
o
o
k
i
n
g
 
e
n
g
i
n
e
 
w
e
 
w
i
l
l
 
u
p
d
a
t
e
 
p
r
i
c
e
s
 
t
o
o
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
h
a
n
g
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
/
/
c
h
e
c
k
 
a
v
a
i
l
a
b
i
l
i
t
y
,
 
e
v
e
n
 
i
f
 
t
h
i
s
 
i
s
 
j
u
s
t
 
a
 
r
o
o
m
 
s
w
i
t
c
h

	
	
	
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
h
e
c
k
_
a
v
a
i
l
a
b
i
l
i
t
y
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
 
e
l
s
e
 
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
N
o
t
 
a
l
l
 
r
o
o
m
s
 
i
n
c
l
u
d
e
d
 
i
n
 
t
h
i
s
 
b
o
o
k
i
n
g
 
a
r
e
 
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
 
t
h
e
 
n
e
w
 
s
e
l
e
c
t
e
d
 
d
a
t
e
s
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
n
d
 
n
o
t
 
g
e
t
 
r
o
o
m
 
b
o
o
k
i
n
g
 
d
e
t
a
i
l
s
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
 
d
o
_
a
m
e
n
d
_
b
o
o
k
i
n
g
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
d
o
_
a
m
e
n
d
_
c
o
n
t
r
a
c
t
(
)
 
&
&
 
$
t
h
i
s
-
>
d
o
_
i
n
s
e
r
t
_
b
o
o
k
i
n
g
_
n
o
t
e
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
 
d
o
_
a
m
e
n
d
_
c
o
n
t
r
a
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
'
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
d
a
t
e
s
_
c
h
a
n
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
 
`
a
r
r
i
v
a
l
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
a
r
r
i
v
a
l
.
"
'
 
,
 
`
d
e
p
a
r
t
u
r
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
d
e
p
a
r
t
u
r
e
.
"
'
 
,
 
`
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
`
 
=
 
'
"
.
i
m
p
l
o
d
e
(
'
,
'
,
 
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
_
r
a
n
g
e
_
a
r
r
a
y
)
.
"
'
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
c
o
n
t
r
a
c
t
 
r
o
o
m
^
t
a
r
i
f
f
 
p
a
i
r
s

 
 
 
 
 
 
 
 
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
r
o
o
m
s
_
t
a
r
i
f
f
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
_
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
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
u
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
c
o
n
t
r
a
c
t
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
 
1
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

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
r
e
s
u
l
t
)
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
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
a
s
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
e
)
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
r
t
[
 
1
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
i
r
s
[
$
r
t
[
 
0
 
]
]
 
=
 
$
r
t
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
=
 
a
r
r
a
y
(
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
p
a
i
r
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
p
a
i
r
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
$
k
 
=
=
 
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
_
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
p
a
i
r
s
[
$
k
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
p
a
i
r
s
[
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
o
o
m
_
u
i
d
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
p
a
i
r
s
[
$
k
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
n
e
w
_
p
a
i
r
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
n
e
w
_
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
[
]
 
=
 
$
k
.
'
^
'
.
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
t
a
r
i
f
f
s
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
$
n
e
w
_
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
l
a
u
s
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
'
,
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
 
`
r
o
o
m
s
_
t
a
r
i
f
f
s
`
=
 
'
"
.
$
r
o
o
m
s
_
t
a
r
i
f
f
s
.
"
'
 
"
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
 
c
o
n
t
r
a
c
t
 
t
a
b
l
e
:
 
a
r
r
i
v
a
l
,
 
d
e
p
a
r
t
u
r
e
 
a
n
d
 
r
o
o
m
^
t
a
r
i
f
f
 
p
a
i
r
s

 
 
 
 
 
 
 
 
i
f
 
(
$
c
l
a
u
s
e
 
!
=
 
'
'
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
c
o
n
t
r
a
c
t
s
 
S
E
T
 
$
c
l
a
u
s
e
 
W
H
E
R
E
 
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
c
o
n
t
r
a
c
t
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
h
e
 
c
o
n
t
r
a
c
t
s
 
t
a
b
l
e
 
f
o
r
 
c
o
n
t
r
a
c
t
 
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
d
a
t
e
s
_
c
h
a
n
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
o
l
d
 
r
o
o
m
 
b
o
o
k
i
n
g
 
d
a
t
a

 
 
 
 
 
 
 
 
 
 
 
 
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
b
l
a
c
k
_
b
o
o
k
i
n
g
`
,
 

	
	
	
	
	
	
	
`
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
`
,
 

	
	
	
	
	
	
	
`
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
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
r
o
o
m
_
b
o
o
k
i
n
g
s
 

	
	
	
	
	
	
W
H
E
R
E
 
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
u
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 

	
	
	
	
	
	
	
A
N
D
 
`
r
o
o
m
_
u
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
r
o
o
m
_
u
i
d
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
o
l
d
_
r
o
o
m
_
b
o
o
k
i
n
g
_
d
a
t
a
 
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
o
o
m
 
b
o
o
k
i
n
g
s
 
d
a
t
a
 
f
o
r
 
t
h
i
s
 
c
o
n
t
r
a
c
t

 
 
 
 
 
 
 
 
 
 
 
 
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
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
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
u
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
c
o
n
t
r
a
c
t
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
U
n
a
b
l
e
 
t
o
 
d
e
l
e
t
e
 
o
l
d
 
r
o
o
m
 
b
o
o
k
i
n
g
 
d
a
t
a
 
f
o
r
 
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
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
 
n
e
w
 
r
o
o
m
 
b
o
o
k
i
n
g
 
d
a
t
a

 
 
 
 
 
 
 
 
 
 
 
 
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
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 

	
	
	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
	
	
`
r
o
o
m
_
u
i
d
`
,

	
	
	
	
	
	
	
	
	
	
`
d
a
t
e
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
u
i
d
`
,

	
	
	
	
	
	
	
	
	
	
`
b
l
a
c
k
_
b
o
o
k
i
n
g
`
,

	
	
	
	
	
	
	
	
	
	
`
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
`
,

	
	
	
	
	
	
	
	
	
	
`
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
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
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
 
a
s
 
$
r
o
o
m
_
u
i
d
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
d
a
t
e
_
r
a
n
g
e
_
a
r
r
a
y
 
a
s
 
$
d
a
t
e
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
(
 

	
	
	
	
	
	
	
	
'
.
(
i
n
t
)
 
$
r
o
o
m
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
d
a
t
e
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
c
o
n
t
r
a
c
t
_
u
i
d
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
o
l
d
_
r
o
o
m
_
b
o
o
k
i
n
g
_
d
a
t
a
[
'
b
l
a
c
k
_
b
o
o
k
i
n
g
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
o
l
d
_
r
o
o
m
_
b
o
o
k
i
n
g
_
d
a
t
a
[
'
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
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
o
l
d
_
r
o
o
m
_
b
o
o
k
i
n
g
_
d
a
t
a
[
'
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
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
o
l
d
_
r
o
o
m
_
b
o
o
k
i
n
g
_
d
a
t
a
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
.
'

	
	
	
	
	
	
	
	
)
,
'
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
 
r
o
o
m
 
b
o
o
k
i
n
g
 
d
a
t
a
 
f
o
r
 
c
o
n
t
r
a
c
t
 
u
i
d
 
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
r
o
o
m
 
b
o
o
k
i
n
g
s
 
t
a
b
l
e

 
 
 
 
 
 
 
 
 
 
 
 
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
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 
S
E
T
 
`
r
o
o
m
_
u
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
n
e
w
_
r
o
o
m
_
u
i
d
.
'
 
W
H
E
R
E
 
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
u
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 
A
N
D
 
`
r
o
o
m
_
u
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
r
o
o
m
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
 
r
o
o
m
 
u
i
d
 
c
o
n
t
r
a
c
t
 
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
_
m
o
d
i
f
i
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
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
o
d
i
f
i
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
c
o
r
e
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
c
o
n
t
r
a
c
t
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
c
o
n
t
r
a
c
t
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
 
d
o
_
i
n
s
e
r
t
_
b
o
o
k
i
n
g
_
n
o
t
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
n
o
t
e
 
(
i
f
 
s
e
t
)

 
 
 
 
 
 
 
 
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
n
o
t
e
 
!
=
 
'
'
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
n
o
t
e
s
 

	
	
	
	
	
	
	
	
	
(
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
u
i
d
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
t
i
m
e
s
t
a
m
p
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
o
n
t
r
a
c
t
_
u
i
d
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
n
o
t
e
.
"
'
,

	
	
	
	
	
	
	
	
	
'
"
 
.
d
a
t
e
(
'
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
'
)
.
"
'
,

	
	
	
	
	
	
	
	
	
'
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
'
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
 
b
o
o
k
i
n
g
 
n
o
t
e
 
f
o
r
 
c
o
n
t
r
a
c
t
 
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
c
o
n
t
r
a
c
t
_
u
i
d
.
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
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
h
e
c
k
_
a
v
a
i
l
a
b
i
l
i
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
i
f
 
t
h
e
 
d
r
a
g
g
e
d
 
r
o
o
m
 
h
a
s
 
b
e
e
n
 
c
h
a
n
g
e
d
,
 
l
e
t
`
s
 
r
e
m
o
v
e
 
t
h
e
 
o
l
d
 
r
o
o
m
 
f
r
o
m
 
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
 
t
o
o
.
 
T
h
e
 
r
e
s
t
 
o
f
 
t
h
e
 
r
o
o
m
s
 
o
f
 
t
h
i
s
 
c
o
n
t
r
a
c
t
 
w
i
l
l
 
r
e
m
a
i
n
 
t
h
e
 
s
a
m
e
.

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
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
d
i
f
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
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
,
 
a
r
r
a
y
(
'
0
'
 
=
>
 
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
_
u
i
d
)
)
;


 
 
 
 
 
 
 
 
/
/
n
o
w
 
l
e
t
`
s
 
a
d
d
 
t
h
e
 
n
e
w
 
r
o
o
m
 
u
i
d
 
t
o
 
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
[
]
 
=
 
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
o
o
m
_
u
i
d
;


 
 
 
 
 
 
 
 
/
/
l
e
t
`
s
 
s
e
t
 
t
h
e
 
d
a
t
e
 
r
a
n
g
e
 
a
r
r
a
y
 
f
o
r
 
t
h
e
 
n
e
w
 
c
o
n
t
r
a
c
t
 
d
a
t
e
s

 
 
 
 
 
 
 
 
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
_
r
a
n
g
e
_
a
r
r
a
y
 
=
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
,
 
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
b
o
o
k
e
d
_
d
a
t
e
)
;


 
 
 
 
 
 
 
 
/
/
l
e
t
`
s
 
c
h
e
c
k
 
a
v
a
i
l
a
b
i
l
i
t
y
 
f
o
r
 
t
h
e
 
r
o
o
m
 
u
i
d
s
 
i
n
 
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s

 
 
 
 
 
 
 
 
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
e
v
e
n
t
_
r
e
s
i
z
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
 
`
d
a
t
e
`
 
I
N
 
(
'
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
_
r
a
n
g
e
_
a
r
r
a
y
,
 
f
a
l
s
e
)
.
'
)
'
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
_
r
a
n
g
e
_
a
r
r
a
y
)
 
>
 
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
c
o
n
t
r
a
c
t
_
b
o
o
k
e
d
_
d
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
d
i
f
f
 
=
 
a
r
r
a
y
_
d
i
f
f
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
_
r
a
n
g
e
_
a
r
r
a
y
,
 
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
b
o
o
k
e
d
_
d
a
t
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
r
e
s
i
z
e
d
 
t
h
e
 
e
v
e
n
t
 
t
o
 
a
 
s
h
o
r
t
e
r
 
p
e
r
i
o
d
,
 
s
o
 
t
h
e
 
r
o
o
m
s
 
a
r
e
 
a
l
r
e
a
d
y
 
b
o
o
k
e
d
 
i
n
 
t
h
i
s
 
c
o
n
t
r
a
c
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
m
p
t
y
(
$
b
o
o
k
e
d
_
d
a
t
e
s
_
d
i
f
f
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
 
`
d
a
t
e
`
 
I
N
 
(
'
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
$
b
o
o
k
e
d
_
d
a
t
e
s
_
d
i
f
f
,
 
f
a
l
s
e
)
.
'
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
S
o
m
e
t
h
i
n
g
 
w
e
n
t
 
w
r
o
n
g
.
'
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
 
'
S
E
L
E
C
T
 
`
r
o
o
m
_
b
o
o
k
i
n
g
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
o
o
m
_
b
o
o
k
i
n
g
s
 

	
	
	
	
	
	
W
H
E
R
E
 
`
r
o
o
m
_
u
i
d
`
 
I
N
 
(
'
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
$
t
h
i
s
-
>
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
)
.
"
)
 
 

	
	
	
	
	
	
A
N
D
 
$
c
l
a
u
s
e
 

	
	
	
	
	
	
A
N
D
 
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
u
i
d
`
 
!
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
o
n
t
r
a
c
t
_
u
i
d
.
'
 
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

