
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
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
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
 
!
=
 
'
'
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
t
y
p
e
 
=
 
$
j
r
C
o
n
f
i
g
[
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
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
p
t
y
p
e
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
n
g
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
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
l
a
n
g
 
=
 
'
e
n
-
G
B
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
l
a
n
g
 
=
 
$
t
h
i
s
-
>
l
a
n
g
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
p
t
y
p
e
 
=
 
$
t
h
i
s
-
>
p
t
y
p
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
i
n
i
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
 
s
e
t
_
l
a
n
g
u
a
g
e
(
$
l
a
n
g
 
=
 
'
e
n
-
G
B
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
$
l
a
n
g
)
 
|
|
 
$
l
a
n
g
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
 
=
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
l
a
n
g
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
n
g
 
=
 
$
l
a
n
g
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
t
y
p
e
(
$
p
t
y
p
e
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
$
p
t
y
p
e
)
 
|
|
 
$
p
t
y
p
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
 
=
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
p
t
y
p
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
p
t
y
p
e
 
=
 
$
p
t
y
p
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
 
d
e
f
i
n
e
(
$
c
o
n
s
t
a
n
t
,
 
$
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
f
i
n
i
t
i
o
n
s
[
 
$
t
h
i
s
-
>
p
t
y
p
e
 
]
[
 
$
c
o
n
s
t
a
n
t
 
]
 
=
 
$
s
t
r
i
n
g
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
d
e
f
i
n
e
d
(
$
c
o
n
s
t
a
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
s
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
t
y
p
e
(
g
e
t
_
s
h
o
w
t
i
m
e
(
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
t
y
p
e
'
)
)
;


 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
p
t
y
p
e
,
 
$
t
h
i
s
-
>
d
e
f
i
n
i
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
 
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
l
a
n
g
u
a
g
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
-
>
g
e
t
_
l
a
n
g
u
a
g
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
t
y
p
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
d
e
f
i
n
i
t
i
o
n
s
[
 
$
t
h
i
s
-
>
p
t
y
p
e
 
]
[
 
$
c
o
n
s
t
a
n
t
 
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
 
$
t
h
i
s
-
>
d
e
f
i
n
i
t
i
o
n
s
[
 
$
t
h
i
s
-
>
p
t
y
p
e
 
]
[
 
$
c
o
n
s
t
a
n
t
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
d
e
f
i
n
i
t
i
o
n
s
[
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
p
t
y
p
e
 
]
[
 
$
c
o
n
s
t
a
n
t
 
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
 
$
t
h
i
s
-
>
d
e
f
i
n
i
t
i
o
n
s
[
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
p
t
y
p
e
 
]
[
 
$
c
o
n
s
t
a
n
t
 
]
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
 
r
e
s
e
t
_
l
a
n
g
_
a
n
d
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
t
y
p
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
l
a
n
g
 
=
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
l
a
n
g
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
t
y
p
e
 
=
 
$
t
h
i
s
-
>
d
e
f
a
u
l
t
_
p
t
y
p
e
;

 
 
 
 
}

}

