
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
c
o
n
t
r
a
c
t
_
s
e
c
r
e
t
_
k
e
y

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
n
e
r
a
t
e
_
s
e
c
r
e
t
_
k
e
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
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
 
r
a
n
d
o
m
 
k
e
y
 
t
h
a
t
'
s
 
e
m
a
i
l
e
d
 
t
o
 
t
h
e
 
c
l
i
e
n
t
 
s
o
 
t
h
a
t
 
n
o
n
-
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
s
 
c
a
n
 
a
l
s
o
 
p
a
y
 
f
o
r
 
b
o
o
k
i
n
g
s
.
 
T
h
i
s
 
i
s
 
i
n
 
s
u
p
p
o
r
t
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
e
n
q
u
i
r
i
e
s
 
f
e
a
t
u
r
e

 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
k
e
e
p
l
o
o
k
i
n
g
)
:

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
r
e
t
_
k
e
y
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
5
0
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
S
E
L
E
C
T
 
s
e
c
r
e
t
_
k
e
y
 
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
 
s
e
c
r
e
t
_
k
e
y
 
=
 
'
"
.
$
s
e
c
r
e
t
_
k
e
y
.
"
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
c
o
n
t
r
a
c
t
_
l
i
s
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
c
o
n
t
r
a
c
t
_
l
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
n
d
w
h
i
l
e
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
e
c
r
e
t
_
k
e
y
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
 
s
a
v
e
_
s
e
c
r
e
t
_
k
e
y
(
$
s
e
c
r
e
t
_
k
e
y
,
 
$
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
$
s
e
c
r
e
t
_
k
e
y
)
 
=
=
 
'
'
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
S
e
c
r
e
t
 
k
e
y
 
n
o
t
 
s
e
t
'
,
 
2
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
$
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
)
 
=
=
 
'
'
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
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
t
r
y
 
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
 
`
s
e
c
r
e
t
_
k
e
y
`
 
=
 
'
"
.
$
s
e
c
r
e
t
_
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
$
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
)
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
)
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
_
s
e
c
r
e
t
_
k
e
y
_
f
o
r
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
i
d
(
$
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
s
e
c
r
e
t
_
k
e
y
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
"
.
$
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
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
s
e
c
r
e
t
_
k
e
y
 
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
$
s
e
c
r
e
t
_
k
e
y
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
n
t
r
a
c
t
 
U
I
D
 
n
o
t
 
r
e
c
o
g
n
i
s
e
d
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
 
$
s
e
c
r
e
t
_
k
e
y
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
e
t
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
i
d
_
f
o
r
_
s
e
c
r
e
t
_
k
e
y
(
$
s
e
c
r
e
t
_
k
e
y
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
s
e
c
r
e
t
_
k
e
y
`
 
=
 
'
"
.
$
s
e
c
r
e
t
_
k
e
y
.
"
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
$
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
S
e
c
r
e
t
 
k
e
y
 
n
o
t
 
r
e
c
o
g
n
i
s
e
d
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
 
$
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
 
v
a
l
i
d
a
t
e
_
s
e
c
r
e
t
_
k
e
y
(
$
s
e
c
r
e
t
_
k
e
y
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
s
e
c
r
e
t
_
k
e
y
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
s
e
c
r
e
t
_
k
e
y
`
 
=
 
'
"
.
$
s
e
c
r
e
t
_
k
e
y
.
"
'
 
"
;

 
 
 
 
 
 
 
 
$
s
e
c
r
e
t
_
k
e
y
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
e
m
p
t
y
(
$
s
e
c
r
e
t
_
k
e
y
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
 
c
h
e
c
k
_
s
e
c
r
e
t
_
k
e
y
_
u
s
e
d
(
$
s
e
c
r
e
t
_
k
e
y
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
s
e
c
r
e
t
_
k
e
y
_
u
s
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
s
e
c
r
e
t
_
k
e
y
`
 
=
 
'
"
.
$
s
e
c
r
e
t
_
k
e
y
.
"
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
s
e
c
r
e
t
_
k
e
y
_
u
s
e
d
 
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
b
o
o
l
)
 
$
s
e
c
r
e
t
_
k
e
y
_
u
s
e
d
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

}

